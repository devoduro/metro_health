<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Ashlocs Professional Hair Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/it-styles.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top animate-slide-down">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="brand-hi">Ash</span><span class="brand-cliqs">locs</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            @foreach($services as $service)
                                @if($service->slug)
                                <li><a class="dropdown-item" href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a></li>
                                @endif
                            @endforeach
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('services.index') }}">View All Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('shop.index') }}">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary-custom btn-sm" href="{{ route('booking.index') }}">Book Appointment</a>
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

    <!-- Page Header -->
    <section class="hero-section" style="min-height: 50vh;">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center text-center" style="min-height: 50vh;">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 mb-4">Our Services</h1>
                    <p class="lead">Elevating Your Crown, One Loc at a Time Through Exceptional Services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach($services as $index => $service)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto"><i class="{{ $service->icon }}"></i></div>
                        <h3 class="service-title">{{ $service->title }}</h3>
                        <p class="small opacity-75 mb-4">{{ $service->description }}</p>
                        @if($service->slug)
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-outline-primary btn-sm">Learn More</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-light-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="mb-4">Ready to Transform Your Look?</h2>
                    <p class="lead mb-4">Book an appointment with our expert stylists today and experience the Ashlocs difference.</p>
                    <a href="{{ route('booking.index') }}" class="btn btn-primary-custom btn-lg">Book Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <a class="navbar-brand mb-3 d-block" href="{{ route('home') }}">
                        <span style="color:#F26522;">Ash</span><span style="color:#ffffff;">locs</span>
                    </a>
                    <p class="small text-white mb-4">We specialize in dreadlocks, offering everything from starter locs to expert maintenance.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/183aATKKiS/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/ashlocs" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@ashlocs_dreadlocks" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="mb-3 fs-6 text-white text-uppercase">Services</h5>
                    <a href="{{ route('home') }}" class="footer-link">Home</a>
                    <a href="{{ route('about') }}" class="footer-link">About Us</a>
                    <a href="{{ route('services.index') }}" class="footer-link">Our Services</a>
                    <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="mb-3 fs-6 text-white text-uppercase">Company</h5>
                    <a href="{{ route('shop.index') }}" class="footer-link">Shop</a>
                    <a href="{{ route('booking.index') }}" class="footer-link">Book Appointment</a>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-3 fs-6 text-white text-uppercase">Contact</h5>
                    <p class="small text-muted mb-2"><i class="fas fa-phone me-2"></i>+447724500349</p>
                    <p class="small text-muted mb-2"><i class="fas fa-envelope me-2"></i>bookings@ashlocs.co.uk</p>
                    <p class="small text-muted"><i class="fas fa-map-marker-alt me-2"></i>UK-wide Home Service</p>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
            <div class="text-center small text-white">
                &copy; <span id="year"></span> Ashlocs. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/it-scripts.js') }}"></script>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
