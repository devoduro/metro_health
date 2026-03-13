<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Management | Ashlocs Admin</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/ashlocs-custom.css')); ?>">
</head>
<body style="background: #f8f9fa;">
    
    <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="admin-content">
        <?php $__env->startSection('page-title', 'Orders Management'); ?>
        <?php echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid p-4">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5><i class="fas fa-shopping-cart me-2"></i>All Orders</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" id="statusFilter" style="width: auto;">
                            <option value="">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="delivered">Delivered</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
                <div class="admin-card-body">
                    <?php if($orders->count() > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Customer</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><strong><?php echo e($order->order_number); ?></strong></td>
                                    <td>
                                        <strong><?php echo e($order->customer_name); ?></strong><br>
                                        <small class="text-muted"><?php echo e($order->customer_email); ?></small><br>
                                        <small class="text-muted"><?php echo e($order->customer_phone); ?></small>
                                    </td>
                                    <td><?php echo e($order->items->count()); ?> item(s)</td>
                                    <td><strong>£<?php echo e(number_format($order->total, 2)); ?></strong></td>
                                    <td>
                                        <span class="badge bg-<?php echo e($order->payment_status == 'paid' ? 'success' : ($order->payment_status == 'failed' ? 'danger' : 'warning')); ?>">
                                            <?php echo e(ucfirst($order->payment_status)); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-<?php echo e($order->status == 'pending' ? 'warning' : ($order->status == 'delivered' ? 'success' : 'info')); ?>">
                                            <?php echo e(ucfirst($order->status)); ?>

                                        </span>
                                    </td>
                                    <td><?php echo e($order->created_at->format('M d, Y')); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal<?php echo e($order->id); ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Order Detail Modal -->
                                <div class="modal fade" id="orderModal<?php echo e($order->id); ?>" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Order <?php echo e($order->order_number); ?> Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">Customer Information</h6>
                                                        <p><strong>Name:</strong> <?php echo e($order->customer_name); ?></p>
                                                        <p><strong>Email:</strong> <?php echo e($order->customer_email); ?></p>
                                                        <p><strong>Phone:</strong> <?php echo e($order->customer_phone); ?></p>
                                                        <p><strong>Address:</strong><br><?php echo e($order->shipping_address); ?><br><?php echo e($order->city); ?>, <?php echo e($order->postcode); ?></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="text-muted">Order Summary</h6>
                                                        <p><strong>Order Number:</strong> <?php echo e($order->order_number); ?></p>
                                                        <p><strong>Order Date:</strong> <?php echo e($order->created_at->format('M d, Y H:i')); ?></p>
                                                        <p><strong>Payment Method:</strong> <?php echo e($order->payment_method ?? 'N/A'); ?></p>
                                                        <p><strong>Subtotal:</strong> £<?php echo e(number_format($order->subtotal, 2)); ?></p>
                                                        <p><strong>Shipping:</strong> £<?php echo e(number_format($order->shipping_cost, 2)); ?></p>
                                                        <p><strong>Total:</strong> <span class="text-primary fs-5">£<?php echo e(number_format($order->total, 2)); ?></span></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <h6 class="text-muted">Order Items</h6>
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($item->product_name); ?></td>
                                                                    <td>£<?php echo e(number_format($item->price, 2)); ?></td>
                                                                    <td><?php echo e($item->quantity); ?></td>
                                                                    <td>£<?php echo e(number_format($item->subtotal, 2)); ?></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php if($order->notes): ?>
                                                    <div class="col-12">
                                                        <h6 class="text-muted">Order Notes</h6>
                                                        <p class="bg-light p-3 rounded"><?php echo e($order->notes); ?></p>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="col-12">
                                                        <h6 class="text-muted">Update Order</h6>
                                                        <form action="<?php echo e(route('admin.orders.update', $order->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Order Status</label>
                                                                    <select name="status" class="form-select" required>
                                                                        <option value="pending" <?php echo e($order->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                                                        <option value="processing" <?php echo e($order->status == 'processing' ? 'selected' : ''); ?>>Processing</option>
                                                                        <option value="shipped" <?php echo e($order->status == 'shipped' ? 'selected' : ''); ?>>Shipped</option>
                                                                        <option value="delivered" <?php echo e($order->status == 'delivered' ? 'selected' : ''); ?>>Delivered</option>
                                                                        <option value="cancelled" <?php echo e($order->status == 'cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Payment Status</label>
                                                                    <select name="payment_status" class="form-select">
                                                                        <option value="pending" <?php echo e($order->payment_status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                                                        <option value="paid" <?php echo e($order->payment_status == 'paid' ? 'selected' : ''); ?>>Paid</option>
                                                                        <option value="failed" <?php echo e($order->payment_status == 'failed' ? 'selected' : ''); ?>>Failed</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="fas fa-save me-2"></i>Update Order
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <?php echo e($orders->links()); ?>

                    </div>
                    <?php else: ?>
                    <div class="text-center py-5 text-muted">
                        <i class="fas fa-shopping-cart fa-4x mb-3"></i>
                        <h5>No orders found</h5>
                        <p>Orders will appear here once customers make purchases.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/admin/orders.blade.php ENDPATH**/ ?>