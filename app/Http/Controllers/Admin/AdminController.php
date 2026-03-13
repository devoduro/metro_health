<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Service;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $stats = [
            'total_bookings' => Booking::count(),
            'pending_bookings' => Booking::where('status', 'pending')->count(),
            'confirmed_bookings' => Booking::where('status', 'confirmed')->count(),
            'total_orders' => Order::count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'total_services' => Service::count(),
            'total_products' => Product::count(),
        ];

        $recent_bookings = Booking::with('service')
            ->latest()
            ->take(5)
            ->get();

        $recent_orders = Order::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_bookings', 'recent_orders'));
    }

    public function bookings()
    {
        $bookings = Booking::with('service')
            ->latest()
            ->paginate(20);

        return view('admin.bookings', compact('bookings'));
    }

    public function updateBookingStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
            'estimated_price' => 'nullable|numeric|min:0',
            'service_cost' => 'nullable|numeric|min:0',
            'admin_notes' => 'nullable|string',
        ]);

        $oldStatus = $booking->status;
        $oldEstimatedPrice = $booking->estimated_price;
        $oldServiceCost = $booking->service_cost;

        $booking->update([
            'status' => $request->status,
            'estimated_price' => $request->estimated_price,
            'service_cost' => $request->service_cost,
            'admin_notes' => $request->admin_notes,
        ]);

        // Send email notification to customer if status, estimated_price, or service_cost changed
        $shouldNotify = ($oldStatus !== $request->status) || 
                        ($oldEstimatedPrice != $request->estimated_price) || 
                        ($oldServiceCost != $request->service_cost);

        if ($shouldNotify) {
            try {
                \Log::info('Sending booking update email to customer', [
                    'booking_id' => $booking->id,
                    'customer_email' => $booking->email,
                    'old_status' => $oldStatus,
                    'new_status' => $request->status,
                    'old_estimated_price' => $oldEstimatedPrice,
                    'new_estimated_price' => $request->estimated_price,
                    'old_service_cost' => $oldServiceCost,
                    'new_service_cost' => $request->service_cost
                ]);

                if (config('mail.default') && config('mail.mailers.' . config('mail.default'))) {
                    \Mail::to($booking->email)
                        ->send(new \App\Mail\BookingStatusUpdate($booking, $oldStatus));
                    
                    \Log::info('Booking update email sent successfully', ['booking_id' => $booking->id]);
                }
            } catch (\Exception $e) {
                \Log::error('Failed to send booking update email: ' . $e->getMessage(), [
                    'exception' => $e,
                    'booking_id' => $booking->id,
                    'trace' => $e->getTraceAsString()
                ]);
            }
        }

        return redirect()->back()->with('success', 'Booking updated successfully!' . ($shouldNotify ? ' Customer has been notified via email.' : ''));
    }

    public function orders()
    {
        $orders = Order::with('items.product')
            ->latest()
            ->paginate(20);

        return view('admin.orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
            'payment_status' => 'nullable|in:pending,paid,failed',
        ]);

        $order->update([
            'status' => $request->status,
            'payment_status' => $request->payment_status ?? $order->payment_status,
        ]);

        return redirect()->back()->with('success', 'Order status updated successfully!');
    }
}
