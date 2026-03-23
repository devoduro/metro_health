<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Metro Health</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/ashlocs-custom.css') }}">
</head>
<body style="background: #f8f9fa;">
    
    @include('admin.partials.sidebar')

    <div class="admin-content">
        @include('admin.partials.topbar')

        <div class="container-fluid p-4">
            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="admin-stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $stats['total_bookings'] }}</h3>
                            <p>Total Bookings</p>
                            <small class="text-warning">{{ $stats['pending_bookings'] }} pending</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="admin-stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $stats['total_orders'] }}</h3>
                            <p>Total Orders</p>
                            <small class="text-warning">{{ $stats['pending_orders'] }} pending</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="admin-stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                            <i class="fas fa-cut"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $stats['total_services'] }}</h3>
                            <p>Services</p>
                            <small class="text-muted">Active services</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="admin-stat-card">
                        <div class="stat-icon" style="background: var(--ashlocs-gradient);">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $stats['total_products'] }}</h3>
                            <p>Products</p>
                            <small class="text-muted">In catalog</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Recent Bookings -->
                <div class="col-lg-6">
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <h5><i class="fas fa-calendar-alt me-2"></i>Recent Bookings</h5>
                            <a href="{{ route('admin.bookings') }}" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="admin-card-body">
                            @if($recent_bookings->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Service</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_bookings as $booking)
                                        <tr>
                                            <td>
                                                <strong>{{ $booking->name }}</strong><br>
                                                <small class="text-muted">{{ $booking->email }}</small>
                                            </td>
                                            <td>{{ $booking->service->title ?? 'N/A' }}</td>
                                            <td>{{ $booking->preferred_date->format('M d, Y') }}<br>
                                                <small class="text-muted">{{ $booking->preferred_time }}</small>
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ $booking->status == 'pending' ? 'warning' : ($booking->status == 'confirmed' ? 'success' : 'secondary') }}">
                                                    {{ ucfirst($booking->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="text-center py-4 text-muted">
                                <i class="fas fa-calendar-times fa-3x mb-3"></i>
                                <p>No bookings yet</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="col-lg-6">
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <h5><i class="fas fa-shopping-bag me-2"></i>Recent Orders</h5>
                            <a href="{{ route('admin.orders') }}" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="admin-card-body">
                            @if($recent_orders->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_orders as $order)
                                        <tr>
                                            <td><strong>{{ $order->order_number }}</strong></td>
                                            <td>
                                                {{ $order->customer_name }}<br>
                                                <small class="text-muted">{{ $order->customer_email }}</small>
                                            </td>
                                            <td><strong>£{{ number_format($order->total, 2) }}</strong></td>
                                            <td>
                                                <span class="badge bg-{{ $order->status == 'pending' ? 'warning' : ($order->status == 'delivered' ? 'success' : 'info') }}">
                                                    {{ ucfirst($order->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="text-center py-4 text-muted">
                                <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                                <p>No orders yet</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
