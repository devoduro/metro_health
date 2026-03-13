<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['company_name'] }} | IT Consultancy & Solutions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @include('partials.it-styles')
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top animate-slide-down">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="brand-hi">Hi</span><span class="brand-cliqs">CliQs</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3">
                        <button class="theme-switch" id="theme-toggle" aria-label="Toggle Dark Mode">
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-shape" style="top: 10%; right: 10%; width: 300px; height: 300px;"></div>
        <div class="hero-shape" style="bottom: 10%; left: 10%; width: 200px; height: 200px; animation-delay: 1s;"></div>

        <!-- Floating Background Icons -->
        <div class="hero-floating-icon" style="top: 15%; left: 15%; font-size: 3rem; animation: floatIcon1 20s infinite linear;"><i class="fas fa-code"></i></div>
        <div class="hero-floating-icon" style="top: 20%; right: 15%; font-size: 4rem; animation: floatIcon2 25s infinite linear;"><i class="fas fa-network-wired"></i></div>
        <div class="hero-floating-icon" style="bottom: 20%; left: 20%; font-size: 2.5rem; animation: floatIcon3 18s infinite linear;"><i class="fas fa-database"></i></div>
        <div class="hero-floating-icon" style="bottom: 25%; right: 10%; font-size: 3.5rem; animation: floatIcon1 22s infinite linear;"><i class="fas fa-laptop-code"></i></div>
        <div class="hero-floating-icon" style="top: 50%; left: 5%; font-size: 2rem; animation: floatIcon2 30s infinite linear;"><i class="fas fa-mobile-alt"></i></div>
        <div class="hero-floating-icon" style="top: 40%; right: 5%; font-size: 2.8rem; animation: floatIcon3 24s infinite linear;"><i class="fas fa-cloud"></i></div>

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10 hero-content" data-aos="fade-up">
                    <h1 class="animate-slide-down" style="animation-delay: 0.2s; min-height: 1.2em;">
                        <span id="typewriter-text"></span><span class="typewriter-cursor"></span>
                    </h1>
                    <p class="mx-auto animate-slide-down" style="animation-delay: 0.4s; opacity: 0; animation-fill-mode: forwards;">
                        Reliable, Scalable and User-Friendly IT Systems tailored for your success.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center animate-slide-down" style="animation-delay: 0.6s; opacity: 0; animation-fill-mode: forwards;">
                        <a href="#projects" class="btn btn-primary-custom animate-pulse">View Our Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="hero-floating-icon" style="top: 10%; right: 5%; font-size: 2rem; animation: floatIcon1 15s infinite linear;"><i class="fas fa-user-secret"></i></div>
        <div class="hero-floating-icon" style="bottom: 15%; left: 5%; font-size: 3rem; animation: floatIcon2 18s infinite linear;"><i class="fas fa-bullseye"></i></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="about-img-grid">
                        <div class="about-img-item animate-float" style="animation-delay: 0s;"><i class="fas fa-code"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1s;"><i class="fas fa-server"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 0.5s;"><i class="fas fa-users-cog"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1.5s;"><i class="fas fa-chart-line"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <h5 class="text-primary-custom text-uppercase ls-2">Who We Are</h5>
                    <h2 class="mb-4">{{ $settings['about_title'] }}</h2>
                    <p class="mb-4">{{ $settings['about_description'] }}</p>

                    <!-- Stats Grid -->
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="{{ $settings['years_experience'] }}">0</span>
                                <span class="counter-label">Years</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="{{ $settings['total_projects'] }}">0</span>
                                <span class="counter-label">Projects</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="{{ $settings['success_rate'] }}">0</span>
                                <span class="counter-label">% Success</span>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled feature-list">
                        <li><i class="fas fa-check-circle"></i> Certified IT Professionals</li>
                        <li><i class="fas fa-check-circle"></i> Custom-tailored Strategies</li>
                        <li><i class="fas fa-check-circle"></i> Nationwide Support</li>
                        <li><i class="fas fa-check-circle"></i> Cutting-edge Technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-light-custom">
        <div class="hero-floating-icon" style="top: 10%; left: 10%; font-size: 2.5rem; animation: floatIcon3 20s infinite linear;"><i class="fas fa-tv"></i></div>
        <div class="hero-floating-icon" style="bottom: 20%; right: 10%; font-size: 2rem; animation: floatIcon1 25s infinite linear;"><i class="fas fa-tools"></i></div>

        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary-custom text-uppercase">What We Do</h5>
                <h2>Our Services</h2>
            </div>

            <div class="row g-4">
                @foreach($services as $index => $service)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto"><i class="{{ $service->icon }}"></i></div>
                        <h3 class="service-title">{{ $service->title }}</h3>
                        <p class="small opacity-75">{{ $service->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="hero-floating-icon" style="top: 15%; right: 15%; font-size: 3rem; animation: floatIcon2 22s infinite linear;"><i class="fas fa-box-open"></i></div>
        <div class="hero-floating-icon" style="bottom: 10%; left: 10%; font-size: 2.5rem; animation: floatIcon3 19s infinite linear;"><i class="fas fa-shipping-fast"></i></div>

        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h5 class="text-primary-custom text-uppercase ls-2">Our Innovations</h5>
                    <h2 class="display-5 fw-bold">Specialized Products</h2>
                    <p class="mt-3 opacity-75">Cutting-edge solutions designed to solve real-world problems. Explore our suite of specialized software products.</p>
                </div>
            </div>

            <div class="product-grid">
                @foreach($products as $index => $product)
                <div class="product-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="product-icon-wrapper"><i class="{{ $product->icon }}"></i></div>
                    <div class="product-content">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <a href="{{ $product->link ?? '#' }}" class="product-link">Explore {{ $product->name }} <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Projects -->
    <section id="projects" class="section-padding bg-light-custom">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h5 class="text-primary-custom text-uppercase">Why Choose Us</h5>
                    <h2 class="mb-4">Trusted Nationwide for Excellence</h2>
                    <p class="lead mb-5">With over a decade of proven expertise, HiCliQs delivers reliable, scalable and user-friendly IT systems that transform businesses across Ghana. We combine cutting-edge technology with local understanding to provide solutions that truly work.</p>
                </div>
            </div>

            <!-- Why Choose Us Features Grid -->
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-award"></i></div>
                        <h5 class="mb-3">{{ $settings['years_experience'] }}+ Years Experience</h5>
                        <p class="small opacity-75">Over a decade of delivering successful IT projects across Ghana with proven results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-users"></i></div>
                        <h5 class="mb-3">{{ $settings['total_projects'] }}+ Projects</h5>
                        <p class="small opacity-75">Successfully completed projects for schools, hospitals, government agencies and businesses.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-headset"></i></div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="small opacity-75">Round-the-clock technical support and maintenance to keep your systems running smoothly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-shield-alt"></i></div>
                        <h5 class="mb-3">Secure & Reliable</h5>
                        <p class="small opacity-75">Enterprise-grade security and {{ $settings['success_rate'] }}% uptime guarantee for all our solutions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partners Logo Grid -->
        <div class="clients-section">
            <div class="container">
                <h4 class="text-center mb-2 opacity-75">Our Proud Partners & Projects</h4>
                <p class="text-center mb-5 opacity-60">Trusted by leading organizations across Ghana</p>
                
                <div class="partners-grid" data-aos="fade-up">
                    @foreach($clients as $index => $client)
                    <div class="partner-logo-card" data-aos="zoom-in" data-aos-delay="{{ ($index + 1) * 50 }}">
                        @if($client->logo)
                            <img src="{{ $client->logo }}" alt="{{ $client->name }}">
                        @else
                            <h6 class="text-center mb-0">{{ $client->name }}</h6>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section-padding bg-light-custom" style="position: relative; overflow: hidden;">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-code"></i></div>
                        <h4 class="help-card-title">Custom Software</h4>
                        <p class="help-card-text">Do you build from scratch? Yes, we engineer tailored software solutions designed specifically for your unique business processes and goals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-graduation-cap"></i></div>
                        <h4 class="help-card-title">School Management</h4>
                        <p class="help-card-text">What does DigiSchool cover? It handles admissions, grading, finance, student records and portals for staff and parents in one secure system.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-church"></i></div>
                        <h4 class="help-card-title">Church Administration</h4>
                        <p class="help-card-text">Is ChurchCliq ease to use? Absolutely. Manage membership databases, tithes, donations and communication with an intuitive, user-friendly interface.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-sms"></i></div>
                        <h4 class="help-card-title">Bulk Messaging</h4>
                        <p class="help-card-text">Can I schedule messages? Yes, SmartBulk allows you to schedule campaigns, personalize messages and track delivery reports in real-time.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-vote-yea"></i></div>
                        <h4 class="help-card-title">E-Voting Solutions</h4>
                        <p class="help-card-text">Is it secure? DigiBallot guarantees transparency and security for elections, providing instant results and audit trails for verified fairness.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-headset"></i></div>
                        <h4 class="help-card-title">General Support</h4>
                        <p class="help-card-text">Do you offer maintenance? We provide ongoing technical support, system maintenance and IT consultancy to keep your operations running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <section id="testimonials" class="section-padding testimonial-section">
            <div class="hero-floating-icon" style="top: 10%; left: 10%; font-size: 1.5rem; animation: floatIcon1 18s infinite linear;">
                <i class="fas fa-quote-right opacity-50"></i>
            </div>

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <h5 class="text-primary-custom text-uppercase">Client Stories</h5>
                        <h2>Trusted by Leaders</h2>
                        <p class="opacity-75">Don't just take our word for it. Here's what our partners say about working with HiCliQs.</p>
                    </div>
                </div>

                @if($testimonials->count() > 0)
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-10">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($testimonials as $index => $testimonial)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="testimonial-card glass-card">
                                        <div class="testimonial-quote-icon">"</div>
                                        <div class="star-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $testimonial->rating)
                                                    <i class="fas fa-star"></i>
                                                @elseif($i - 0.5 <= $testimonial->rating)
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p class="testimonial-text">{{ $testimonial->content }}</p>
                                        <div class="client-info">
                                            <div class="client-details">
                                                <h5>{{ $testimonial->client_organization }}</h5>
                                                <span>{{ $testimonial->client_name }}, {{ $testimonial->client_position }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            @if($testimonials->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon p-3 bg-primary rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon p-3 bg-primary rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                            <div class="carousel-indicators" style="bottom: -50px;">
                                @foreach($testimonials as $index => $testimonial)
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}" 
                                    class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-label="Slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section-padding">
            <div class="hero-floating-icon" style="top: 10%; right: 10%; font-size: 2.5rem; animation: floatIcon3 18s infinite linear;"><i class="fas fa-envelope-open-text"></i></div>
            <div class="hero-floating-icon" style="bottom: 10%; left: 10%; font-size: 3rem; animation: floatIcon1 23s infinite linear;"><i class="fas fa-map-marked-alt"></i></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                        <h5 class="text-primary-custom text-uppercase">Get in Touch</h5>
                        <h2>Let's Build Something Great</h2>
                        <p class="mb-5">Have a project in mind? Contact us today for a consultation.</p>

                        <div class="d-flex align-items-start mb-4">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Location</h5>
                                <p class="opacity-75">{{ $settings['location'] }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-phone-alt"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Phone</h5>
                                <p class="opacity-75">{{ $settings['phone'] }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-envelope"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Email</h5>
                                <p class="opacity-75">{{ $settings['email'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="glass-card">
                            <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Project Inquiry" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">Message</label>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Tell us about your project..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a class="navbar-brand mb-3 d-block" href="#">
                            <span style="color:#F26522;">Hi</span><span style="color:#ffffff;">CliQs</span>
                        </a>
                        <p class="small text-white mb-4">Delivering reliable, scalable and user-friendly IT systems since 2013.</p>
                        <div class="social-icons">
                            <a href="{{ $settings['facebook'] }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $settings['instagram'] }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $settings['tiktok'] }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Company</h5>
                        <a href="#about" class="footer-link">About Us</a>
                        <a href="#services" class="footer-link">Services</a>
                        <a href="#projects" class="footer-link">Projects</a>
                        <a href="#contact" class="footer-link">Contact</a>
                    </div>
                    <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Products</h5>
                        @foreach($products->take(4) as $product)
                        <a href="{{ $product->link ?? '#' }}" class="footer-link">{{ $product->name }}</a>
                        @endforeach
                    </div>
                    <div class="col-lg-4">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Newsletter</h5>
                        <p class="small text-muted">Subscribe to get the latest news and updates.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter email" style="border:none; border-radius: 20px 0 0 20px;">
                            <button class="btn btn-primary-custom" type="button" style="border-radius: 0 20px 20px 0;">Subscribe</button>
                        </div>
                    </div>
                </div>
                <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
                <div class="text-center small text-white">
                    &copy; <span id="year"></span> {{ $settings['company_name'] }}. All Rights Reserved.
                </div>
            </div>
        </footer>

        <!-- Scroll Progress Button -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Custom Cursor Elements -->
        <div class="cursor-dot"></div>
        <div class="cursor-outline"></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>

        @include('partials.it-scripts')
</body>

</html>
