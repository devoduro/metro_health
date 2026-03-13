<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('partials.seo', [
        'title' => 'Our Services',
        'description' => 'Explore our professional hair care services: dreadlocks, braiding, haircuts and training workshops. Expert care for textured hair with UK-wide mobile service.',
        'keywords' => 'hair services, dreadlock services, braiding services, haircut services, training workshops, mobile hair service, textured hair care UK'
    ])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ashlocs-custom.css') }}">
</head>
<body>
    @include('partials.navigation')

    <!-- Hero Section -->
    <section class="hero-section" style="min-height: 60vh; background: linear-gradient(135deg, #FFF5F0 0%, #FFFFFF 100%);">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center" style="min-height: 60vh;">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4">Our Services</h1>
                    <p class="lead" style="font-size: 1.5rem; color: var(--ashlocs-gray);">
                        Elevating Your Crown, One Loc at a Time Through Exceptional Services
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid with Images -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Service 1: Dreadlocks -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-detail-card">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/services/dreadlocks.jpg') }}" alt="Dreadlocks Service" style="width: 100%; height: 300px; object-fit: cover;">
                            <div class="service-badge">Most Popular</div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon-small">
                                <i class="fas fa-cut"></i>
                            </div>
                            <h3 class="service-title">Dreadlocks</h3>
                            <p class="service-description">
                                We specialize in creating and maintaining beautiful, healthy dreadlocks tailored to your style and hair type. From starter locs using the crochet method to traditional full-head locs, sisterlocks and expert maintenance.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Starter Locs (Crochet)</li>
                                <li><i class="fas fa-check-circle"></i> Traditional Locs (Full-head)</li>
                                <li><i class="fas fa-check-circle"></i> Partial / Top Locs</li>
                                <li><i class="fas fa-check-circle"></i> Sisterlocks / Micro Locs</li>
                                <li><i class="fas fa-check-circle"></i> Re-locking / Maintenance</li>
                                <li><i class="fas fa-check-circle"></i> Extensions & Styling</li>
                                <li><i class="fas fa-check-circle"></i> Coloring & Treatments</li>
                            </ul>
                            <div class="service-actions">
                                <a href="{{ route('services.show', 'dreadlocks') }}" class="btn btn-primary-custom">Learn More</a>
                                <a href="{{ route('booking.index') }}" class="btn btn-outline-custom">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Haircut Services -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-detail-card">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/services/Short-Hair-with-Low-Temp-Fade-and-Line-Up.jpg.webp') }}" alt="Haircut Services" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="service-content">
                            <div class="service-icon-small">
                                <i class="fas fa-scissors"></i>
                            </div>
                            <h3 class="service-title">Haircut Services</h3>
                            <p class="service-description">
                                Precision meets style with our professional haircut services tailored for all ages and hair textures. Whether you need a fresh fade, a bold new look, or expert cuts for textured hair, our skilled stylists deliver excellence.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Men's Haircuts</li>
                                <li><i class="fas fa-check-circle"></i> Women's Haircuts</li>
                                <li><i class="fas fa-check-circle"></i> Fades & Shape-ups</li>
                                <li><i class="fas fa-check-circle"></i> Loc Trimming & Shaping</li>
                                <li><i class="fas fa-check-circle"></i> Children's Haircuts</li>
                            </ul>
                            <div class="service-actions">
                                <a href="{{ route('services.show', 'haircut-services') }}" class="btn btn-primary-custom">Learn More</a>
                                <a href="{{ route('booking.index') }}" class="btn btn-outline-custom">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Braiding Services -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-detail-card">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/services/cornrow.jpeg') }}" alt="Braiding Services" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="service-content">
                            <div class="service-icon-small">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3 class="service-title">Braiding Services</h3>
                            <p class="service-description">
                                Protective and stylish, our braiding services are designed to enhance your beauty while keeping your natural hair healthy. From box braids to goddess braids, we create stunning styles that last.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Box Braids</li>
                                <li><i class="fas fa-check-circle"></i> Knotless Braids</li>
                                <li><i class="fas fa-check-circle"></i> Cornrows / Feed-in Braids</li>
                                <li><i class="fas fa-check-circle"></i> Goddess Braids</li>
                                <li><i class="fas fa-check-circle"></i> Senegalese Twists</li>
                                <li><i class="fas fa-check-circle"></i> Braid Repair & Take-down</li>
                            </ul>
                            <div class="service-actions">
                                <a href="{{ route('services.show', 'braiding-services') }}" class="btn btn-primary-custom">Learn More</a>
                                <a href="{{ route('booking.index') }}" class="btn btn-outline-custom">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Training & Workshops -->
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-detail-card">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/services/2026-01-20-U9IWPQ4K.jpeg') }}" alt="Training & Workshops" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="service-content">
                            <div class="service-icon-small">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="service-title">Training & Workshops</h3>
                            <p class="service-description">
                                We offer hands-on, skill-focused sessions designed to equip you with the techniques, confidence and creativity to excel in the hair industry. Learn from experienced professionals in specialized training programs.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check-circle"></i> Dreadlocks Training</li>
                                <li><i class="fas fa-check-circle"></i> Braid Training</li>
                                <li><i class="fas fa-check-circle"></i> Haircut Training (Textured Hair)</li>
                                <li><i class="fas fa-check-circle"></i> Group & 1:1 Pro Sessions</li>
                            </ul>
                            <div class="service-actions">
                                <a href="{{ route('services.show', 'training-workshops') }}" class="btn btn-primary-custom">Learn More</a>
                                <a href="{{ route('booking.index') }}" class="btn btn-outline-custom">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="section-padding" style="background: var(--ashlocs-light);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Why Choose Our Services?</h2>
                    <p class="section-subtitle">
                        Experience the difference with Ashlocs professional hair care services
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4>Expert Stylists</h4>
                        <p>Trained professionals with years of experience in hair care and styling</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Home Service</h4>
                        <p>UK-wide mobile service bringing professional care to your doorstep</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Natural Products</h4>
                        <p>We use premium, natural hair care products for healthy results</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Flexible Scheduling</h4>
                        <p>Convenient appointment times that work with your busy schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2>Ready to Book Your Service?</h2>
                    <p>Experience professional hair care that elevates your crown. Book your appointment today!</p>
                    <a href="{{ route('booking.index') }}" class="btn btn-white-custom btn-lg">
                        <i class="fas fa-calendar-check me-2"></i>Book Appointment Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    </script>
</body>
</html>
