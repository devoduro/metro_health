<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Reviews
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// About Us
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('show');
});

// Shop/Products
Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('show');
});

// Booking Appointments
Route::prefix('booking')->name('booking.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/api/service-price/{serviceId}/{hairType}', [BookingController::class, 'getServicePrice'])->name('api.service-price');
    Route::get('/success', [BookingController::class, 'success'])->name('success');
});

// Stripe Payment Routes
use App\Http\Controllers\StripePaymentController;

Route::prefix('stripe')->name('stripe.')->group(function () {
    Route::post('/create-checkout-session', [StripePaymentController::class, 'createCheckoutSession'])->name('checkout');
    Route::get('/success', [StripePaymentController::class, 'success'])->name('success');
    Route::get('/cancel', [StripePaymentController::class, 'cancel'])->name('cancel');
});

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog/News Routes
Route::prefix('news')->name('news-update.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// Admin Routes
use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Root admin route - redirect to dashboard if authenticated, otherwise to login
    Route::get('/', function () {
        return auth()->check() ? redirect()->route('admin.dashboard') : redirect()->route('admin.login');
    });
    
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
    
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        
        Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
        Route::put('/bookings/{id}', [AdminController::class, 'updateBookingStatus'])->name('bookings.update');
        
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        Route::put('/orders/{id}', [AdminController::class, 'updateOrderStatus'])->name('orders.update');
        
        // Product Management
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        
        // Services Management
        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class)->except(['show']);
        
        // Contact Messages
        Route::get('/contact-messages', [\App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('contact-messages.index');
        Route::get('/contact-messages/{message}', [\App\Http\Controllers\Admin\ContactMessageController::class, 'show'])->name('contact-messages.show');
        Route::patch('/contact-messages/{message}/status', [\App\Http\Controllers\Admin\ContactMessageController::class, 'updateStatus'])->name('contact-messages.update-status');
        Route::delete('/contact-messages/{message}', [\App\Http\Controllers\Admin\ContactMessageController::class, 'destroy'])->name('contact-messages.destroy');
        
        // Reviews Management
        Route::resource('reviews', \App\Http\Controllers\Admin\ReviewController::class);
        Route::patch('/reviews/{review}/toggle-approval', [\App\Http\Controllers\Admin\ReviewController::class, 'toggleApproval'])->name('reviews.toggle-approval');
        
        // Blog/News Management
        Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
        Route::post('/blog/{blog}/toggle-publish', [\App\Http\Controllers\Admin\BlogController::class, 'togglePublish'])->name('blog.toggle-publish');
    });
});

// Dashboard Routes
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    require base_path('routes/dashboard.php');
});
