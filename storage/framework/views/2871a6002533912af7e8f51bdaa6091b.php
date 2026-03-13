<nav class="navbar navbar-expand-lg fixed-top animate-slide-down">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('images/2026-01-12-J8o94jxc.png')); ?>" alt="Ashlocs Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('services.*') ? 'active' : ''); ?>" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <?php
                            $navServices = \App\Models\Service::active()->ordered()->get();
                        ?>
                        <?php $__currentLoopData = $navServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($service->slug): ?>
                            <li><a class="dropdown-item" href="<?php echo e(route('services.show', $service->slug)); ?>"><?php echo e($service->title); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('services.index')); ?>">View All Services</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('shop.*') ? 'active' : ''); ?>" href="<?php echo e(route('shop.index')); ?>">Shop</a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                <li class="nav-item">
                    <a href="<?php echo e(route('booking.index')); ?>" class="btn btn-primary-custom btn-sm">
                        <i class="fas fa-calendar-check me-2"></i>Book an Appointment
                    </a>
                </li>
                <li class="nav-item ms-lg-3">
                    <button class="theme-switch" id="theme-toggle" aria-label="Toggle Dark Mode">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/partials/navigation.blade.php ENDPATH**/ ?>