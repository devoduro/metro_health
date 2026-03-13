<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings Management | Ashlocs Admin</title>
    
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
        @section('page-title', 'Bookings Management')
        @include('admin.partials.topbar')

        <div class="container-fluid p-4">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5><i class="fas fa-calendar-check me-2"></i>All Bookings</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" id="statusFilter" style="width: auto;">
                            <option value="">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
                <div class="admin-card-body">
                    @if($bookings->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Service & Details</th>
                                    <th>Service Range</th>
                                    <th>Date & Time</th>
                                    <th>Estimated</th>
                                    <th>Final Cost</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                <tr>
                                    <td><strong>#{{ $booking->id }}</strong></td>
                                    <td>
                                        <strong>{{ $booking->name }}</strong><br>
                                        <small class="text-muted">{{ $booking->email }}</small><br>
                                        <small class="text-muted">{{ $booking->phone }}</small>
                                    </td>
                                    <td>
                                        <strong>{{ $booking->service->title ?? 'N/A' }}</strong><br>
                                        <small class="text-muted">{{ $booking->hair_type ?: 'No details provided' }}</small>
                                    </td>
                                    <td>
                                        @if($booking->service->price_min || $booking->service->price_max)
                                        <span class="badge bg-light text-dark">{{ $booking->service->getPriceRange() }}</span>
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $booking->preferred_date->format('M d, Y') }}</strong><br>
                                        <small class="text-muted">{{ $booking->preferred_time }}</small>
                                    </td>
                                    <td>
                                        @if($booking->estimated_price)
                                        <span class="badge bg-info">£{{ number_format($booking->estimated_price, 2) }}</span>
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($booking->service_cost)
                                        <strong class="text-success">£{{ number_format($booking->service_cost, 2) }}</strong>
                                        @else
                                        <span class="text-muted">Not set</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $booking->status == 'pending' ? 'warning' : ($booking->status == 'confirmed' ? 'success' : ($booking->status == 'completed' ? 'primary' : 'secondary')) }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal{{ $booking->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Booking Detail Modal -->
                                <div class="modal fade" id="bookingModal{{ $booking->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Booking #{{ $booking->id }} Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">Customer Information</h6>
                                                        <p><strong>Name:</strong> {{ $booking->name }}</p>
                                                        <p><strong>Email:</strong> {{ $booking->email }}</p>
                                                        <p><strong>Phone:</strong> {{ $booking->phone }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">Booking Details</h6>
                                                        <p><strong>Service:</strong> {{ $booking->service->title ?? 'N/A' }}</p>
                                                        <p><strong>Service Price Range:</strong> {{ $booking->service->getPriceRange() }}</p>
                                                        @if($booking->hair_type)
                                                        <p><strong>Hair Details:</strong> {{ $booking->hair_type }}</p>
                                                        @endif
                                                        <p><strong>Estimated Price:</strong> 
                                                            @if($booking->estimated_price)
                                                            <span class="badge bg-info">£{{ number_format($booking->estimated_price, 2) }}</span>
                                                            @else
                                                            <span class="text-muted">Not calculated</span>
                                                            @endif
                                                        </p>
                                                        <p><strong>Final Service Cost:</strong> 
                                                            @if($booking->service_cost)
                                                            <span class="text-success">£{{ number_format($booking->service_cost, 2) }}</span>
                                                            @else
                                                            <span class="text-muted">Not set</span>
                                                            @endif
                                                        </p>
                                                        <p><strong>Date:</strong> {{ $booking->preferred_date->format('M d, Y') }}</p>
                                                        <p><strong>Time:</strong> {{ $booking->preferred_time }}</p>
                                                    </div>
                                                    @if($booking->message)
                                                    <div class="col-12">
                                                        <h6 class="text-muted">Customer Message</h6>
                                                        <p class="bg-light p-3 rounded">{{ $booking->message }}</p>
                                                    </div>
                                                    @endif
                                                    <div class="col-12">
                                                        <h6 class="text-muted">Update Status</h6>
                                                        <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="status" class="form-select" required>
                                                                        <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                        <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                                        <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                                        <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Estimated Price (£)</label>
                                                                    <input type="number" name="estimated_price" class="form-control" step="0.01" min="0" value="{{ $booking->estimated_price }}" placeholder="Enter estimated price">
                                                                    <small class="text-muted">Estimated cost for the service</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Final Service Cost (£)</label>
                                                                    <input type="number" name="service_cost" class="form-control" step="0.01" min="0" value="{{ $booking->service_cost }}" placeholder="Enter final cost">
                                                                    <small class="text-muted">Actual cost charged to customer</small>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Admin Notes</label>
                                                                    <textarea name="admin_notes" class="form-control" rows="3">{{ $booking->admin_notes }}</textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="fas fa-save me-2"></i>Update Booking
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $bookings->links() }}
                    </div>
                    @else
                    <div class="text-center py-5 text-muted">
                        <i class="fas fa-calendar-times fa-4x mb-3"></i>
                        <h5>No bookings found</h5>
                        <p>Bookings will appear here once customers make appointments.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
