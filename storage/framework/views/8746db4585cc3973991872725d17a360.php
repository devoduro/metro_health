<div class="admin-sidebar">
    <div class="sidebar-header">
        <img src="<?php echo e(asset('images/2026-01-12-J8o94jxc.png')); ?>" alt="Ashlocs Logo" style="height: 50px; margin-bottom: 10px;">
        <p style="font-size: 0.75rem; color: var(--ashlocs-gray); margin: 0; letter-spacing: 1px; text-transform: uppercase; font-weight: 600;">Admin Panel</p>
    </div>
    
    <nav class="sidebar-nav">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        
        <a href="<?php echo e(route('admin.bookings')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.bookings') ? 'active' : ''); ?>">
            <i class="fas fa-calendar-check"></i>
            <span>Bookings</span>
            <?php
                $pending_bookings = \App\Models\Booking::where('status', 'pending')->count();
            ?>
            <?php if($pending_bookings > 0): ?>
            <span class="badge bg-warning ms-auto"><?php echo e($pending_bookings); ?></span>
            <?php endif; ?>
        </a>
        
        <a href="<?php echo e(route('admin.orders')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.orders') ? 'active' : ''); ?>">
            <i class="fas fa-shopping-cart"></i>
            <span>Orders</span>
            <?php
                $pending_orders = \App\Models\Order::where('status', 'pending')->count();
            ?>
            <?php if($pending_orders > 0): ?>
            <span class="badge bg-warning ms-auto"><?php echo e($pending_orders); ?></span>
            <?php endif; ?>
        </a>
        
        <a href="<?php echo e(route('admin.products.index')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.products.*') ? 'active' : ''); ?>">
            <i class="fas fa-box"></i>
            <span>Products</span>
        </a>
        
        <a href="<?php echo e(route('admin.services.index')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.services.*') ? 'active' : ''); ?>">
            <i class="fas fa-cut"></i>
            <span>Services & Pricing</span>
        </a>
        
        <a href="<?php echo e(route('admin.contact-messages.index')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.contact-messages.*') ? 'active' : ''); ?>">
            <i class="fas fa-envelope"></i>
            <span>Contact Messages</span>
            <?php
                $new_messages = \App\Models\ContactSubmission::where('status', 'new')->count();
            ?>
            <?php if($new_messages > 0): ?>
            <span class="badge bg-danger ms-auto"><?php echo e($new_messages); ?></span>
            <?php endif; ?>
        </a>
        
        <a href="<?php echo e(route('admin.reviews.index')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.reviews.*') ? 'active' : ''); ?>">
            <i class="fas fa-star"></i>
            <span>Reviews</span>
            <?php
                $pending_reviews = \App\Models\Review::where('is_approved', false)->count();
            ?>
            <?php if($pending_reviews > 0): ?>
            <span class="badge bg-warning text-dark ms-auto"><?php echo e($pending_reviews); ?></span>
            <?php endif; ?>
        </a>
        
        <a href="<?php echo e(route('admin.blog.index')); ?>" class="sidebar-link <?php echo e(request()->routeIs('admin.blog.*') ? 'active' : ''); ?>">
            <i class="fas fa-newspaper"></i>
            <span>News & Articles</span>
            <?php
                $draft_posts = \App\Models\BlogPost::where('published', false)->count();
            ?>
            <?php if($draft_posts > 0): ?>
            <span class="badge bg-info text-dark ms-auto"><?php echo e($draft_posts); ?></span>
            <?php endif; ?>
        </a>
        
        <div class="sidebar-divider"></div>
        
        <a href="<?php echo e(route('home')); ?>" class="sidebar-link" target="_blank">
            <i class="fas fa-globe"></i>
            <span>View Website</span>
        </a>
        
        <a href="<?php echo e(route('admin.logout')); ?>" class="sidebar-link" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </nav>
    
    <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>
</div>

<style>
.admin-sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 260px;
    height: 100vh;
    background: white;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    z-index: 1000;
    overflow-y: auto;
}

.sidebar-header {
    padding: 2rem 1.5rem;
    text-align: center;
    border-bottom: 2px solid #f0f0f0;
}

.sidebar-header h5 {
    font-weight: 700;
    color: var(--ashlocs-dark);
}

.sidebar-nav {
    padding: 1rem 0;
}

.sidebar-link {
    display: flex;
    align-items: center;
    padding: 1rem 1.5rem;
    color: #666;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
}

.sidebar-link:hover {
    background: var(--ashlocs-light);
    color: var(--ashlocs-orange);
}

.sidebar-link.active {
    background: var(--ashlocs-light);
    color: var(--ashlocs-orange);
    border-left: 4px solid var(--ashlocs-orange);
}

.sidebar-link i {
    width: 20px;
    margin-right: 1rem;
    font-size: 1.1rem;
}

.sidebar-divider {
    height: 1px;
    background: #f0f0f0;
    margin: 1rem 0;
}

.admin-content {
    margin-left: 260px;
    min-height: 100vh;
}
</style>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>