<nav class="navbar navbar-expand-lg fixed-top animate-slide-down">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/2026-01-12-J8o94jxc.png') }}" alt="Ashlocs Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services.*') ? 'active' : '' }}" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @php
                            $navServices = \App\Models\Service::active()->ordered()->get();
                        @endphp
                        @foreach($navServices as $service)
                            @if($service->slug)
                            <li><a class="dropdown-item" href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a></li>
                            @endif
                        @endforeach
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('services.index') }}">View All Services</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('shop.*') ? 'active' : '' }}" href="{{ route('shop.index') }}">Shop</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
                <li class="nav-item">
                    <a href="{{ route('booking.index') }}" class="btn btn-primary-custom btn-sm">
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
