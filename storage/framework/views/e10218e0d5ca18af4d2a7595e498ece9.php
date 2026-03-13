<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashlocs | Professional Hair Care Services</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/it-styles.css')); ?>">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top animate-slide-down">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="brand-hi">Ash</span><span class="brand-cliqs">locs</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($service->slug): ?>
                                <li><a class="dropdown-item" href="<?php echo e(route('services.show', $service->slug)); ?>"><?php echo e($service->title); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('services.index')); ?>">View All Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop.index')); ?>">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary-custom btn-sm" href="<?php echo e(route('booking.index')); ?>">Book Appointment</a>
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

    <!-- Hero Section -->
    <section id="home" class="hero-section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo e(asset('images/sliders/slider1.png')); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="hero-shape" style="top: 10%; right: 10%; width: 300px; height: 300px;"></div>
        <div class="hero-shape" style="bottom: 10%; left: 10%; width: 200px; height: 200px; animation-delay: 1s;"></div>

        <!-- Floating Background Icons -->
        <div class="hero-floating-icon" style="top: 15%; left: 15%; font-size: 3rem; animation: floatIcon1 20s infinite linear;"><i class="fas fa-cut"></i></div>
        <div class="hero-floating-icon" style="top: 20%; right: 15%; font-size: 4rem; animation: floatIcon2 25s infinite linear;"><i class="fas fa-spa"></i></div>
        <div class="hero-floating-icon" style="bottom: 20%; left: 20%; font-size: 2.5rem; animation: floatIcon3 18s infinite linear;"><i class="fas fa-heart"></i></div>
        <div class="hero-floating-icon" style="bottom: 25%; right: 10%; font-size: 3.5rem; animation: floatIcon1 22s infinite linear;"><i class="fas fa-star"></i></div>
        <div class="hero-floating-icon" style="top: 50%; left: 5%; font-size: 2rem; animation: floatIcon2 30s infinite linear;"><i class="fas fa-scissors"></i></div>
        <div class="hero-floating-icon" style="top: 40%; right: 5%; font-size: 2.8rem; animation: floatIcon3 24s infinite linear;"><i class="fas fa-hand-sparkles"></i></div>

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10 hero-content" data-aos="fade-up">
                    <h1 class="animate-slide-down" style="animation-delay: 0.2s; min-height: 1.2em;">
                        <span id="typewriter-text"></span><span class="typewriter-cursor"></span>
                    </h1>
                    <p class="mx-auto animate-slide-down" style="animation-delay: 0.4s;">
                        We Provide Professional Hair Care Services - Elevating Your Crown, One Loc at a Time Through Exceptional services
                    </p>
                    <div class="d-flex flex-wrap justify-content-center animate-slide-down" style="animation-delay: 0.6s;">
                        <a href="#services" class="btn btn-primary-custom animate-pulse">Get Started</a>
                        <a href="#about" class="btn btn-outline-light ms-3">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="hero-floating-icon" style="top: 10%; right: 5%; font-size: 2rem; animation: floatIcon1 15s infinite linear;"><i class="fas fa-cut"></i></div>
        <div class="hero-floating-icon" style="bottom: 15%; left: 5%; font-size: 3rem; animation: floatIcon2 18s infinite linear;"><i class="fas fa-star"></i></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="about-img-grid">
                        <div class="about-img-item animate-float" style="animation-delay: 0s;"><i class="fas fa-cut"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1s;"><i class="fas fa-scissors"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 0.5s;"><i class="fas fa-users"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1.5s;"><i class="fas fa-star"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <h5 class="text-primary-custom text-uppercase ls-2">Who We Are</h5>
                    <h2 class="mb-4">We Provide Professional Hair Care Services</h2>
                    <p class="mb-4">We are a full-service hair care studio specializing in dreadlocks, braids, haircuts and haircare education. With a team of skilled professionals, we offer tailored services for all hair types. We also run expert-led workshops and stock a curated range of hair products and accessories.</p>

                    <!-- Stats Grid -->
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="10">0</span>
                                <span class="counter-label">Years Experience</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="500">0</span>
                                <span class="counter-label">Clients Satisfied</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="stats-item">
                                <span class="counter-number" data-target="4.9">0</span>
                                <span class="counter-label">Average Rating</span>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled feature-list">
                        <li><i class="fas fa-check-circle"></i> Skilled Hair Care Professionals</li>
                        <li><i class="fas fa-check-circle"></i> Tailored Services for All Hair Types</li>
                        <li><i class="fas fa-check-circle"></i> UK-wide Home Service Available</li>
                        <li><i class="fas fa-check-circle"></i> Expert-led Workshops & Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-light-custom">
        <div class="hero-floating-icon" style="top: 10%; left: 10%; font-size: 2.5rem; animation: floatIcon3 20s infinite linear;"><i class="fas fa-scissors"></i></div>
        <div class="hero-floating-icon" style="bottom: 20%; right: 10%; font-size: 2rem; animation: floatIcon1 25s infinite linear;"><i class="fas fa-spa"></i></div>

        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary-custom text-uppercase">What We Do</h5>
                <h2>Elevating Your Crown, One Loc at a Time Through Exceptional services</h2>
            </div>

            <div class="row g-4">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo e(($index + 1) * 100); ?>">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto"><i class="<?php echo e($service->icon); ?>"></i></div>
                        <h3 class="service-title"><?php echo e($service->title); ?></h3>
                        <p class="small opacity-75"><?php echo e($service->description); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Portfolio/Recent Work Section -->
    <section id="portfolio" class="products-section">
        <div class="hero-floating-icon" style="top: 15%; right: 15%; font-size: 3rem; animation: floatIcon2 22s infinite linear;"><i class="fas fa-images"></i></div>
        <div class="hero-floating-icon" style="bottom: 10%; left: 10%; font-size: 2.5rem; animation: floatIcon3 19s infinite linear;"><i class="fas fa-star"></i></div>

        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h5 class="text-primary-custom text-uppercase ls-2">Our Work</h5>
                    <h2 class="display-5 fw-bold">Our Recent Work</h2>
                    <p class="mt-3 opacity-75">At Ashlocs, we combine experience, attention to detail and genuine customer care to create a space where hair is treated as an art—and clients are treated like family.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-cut"></i></div>
                        <h4>Classic Locs</h4>
                        <p class="small opacity-75">Traditional dreadlock styling with expert care and attention to detail.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-spa"></i></div>
                        <h4>Skinny Locs</h4>
                        <p class="small opacity-75">Delicate and stylish thin dreadlocks for a refined look.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-hand-sparkles"></i></div>
                        <h4>Crochet Locs</h4>
                        <p class="small opacity-75">Professional crochet technique for instant, beautiful dreadlocks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Projects -->
    <section id="projects" class="section-padding bg-light-custom">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h5 class="text-primary-custom text-uppercase">Why Choose Us</h5>
                    <h2 class="mb-4">Trusted for Excellence in Hair Care</h2>
                    <p class="lead mb-5">At Ashlocs, we combine experience, attention to detail and genuine customer care to create a space where hair is treated as an art—and clients are treated like family.</p>
                </div>
            </div>

            <!-- Why Choose Us Features Grid -->
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-award"></i></div>
                        <h5 class="mb-3">10+ Years Experience</h5>
                        <p class="small opacity-75">Over a decade of delivering exceptional hair care services with proven results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-users"></i></div>
                        <h5 class="mb-3">500+ Clients Satisfied</h5>
                        <p class="small opacity-75">Successfully served hundreds of satisfied clients with repeating business.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-headset"></i></div>
                        <h5 class="mb-3">Expert Training</h5>
                        <p class="small opacity-75">Hands-on workshops and training sessions to equip you with professional hair care skills.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-shield-alt"></i></div>
                        <h5 class="mb-3">Quality & Care</h5>
                        <p class="small opacity-75">Premium products and professional care with a 4.9 average rating from our clients.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section-padding" style="position: relative; overflow: hidden;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary-custom text-uppercase">Frequently Asked Questions</h5>
                <h2>How Can We Help You?</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-cut"></i></div>
                        <h4 class="help-card-title">Dreadlock Services</h4>
                        <p class="help-card-text">What types of locs do you offer? We specialize in starter locs (crochet), traditional full-head locs, partial/top locs, Sisterlocks, microlocs and expert re-locking and maintenance.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-scissors"></i></div>
                        <h4 class="help-card-title">Haircut Services</h4>
                        <p class="help-card-text">Do you offer haircuts? Yes! Precision meets style with our professional haircut services tailored for all ages and hair textures, including fades and trims.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-spa"></i></div>
                        <h4 class="help-card-title">Braiding Services</h4>
                        <p class="help-card-text">Are braiding services available? Absolutely! Our protective and stylish braiding services are designed to enhance your beauty while keeping your natural hair healthy.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-graduation-cap"></i></div>
                        <h4 class="help-card-title">Training & Workshops</h4>
                        <p class="help-card-text">Do you offer training? Yes! We offer hands-on, skill-focused sessions designed to equip you with the techniques, confidence and creativity to excel in the hair industry.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-home"></i></div>
                        <h4 class="help-card-title">Home Service</h4>
                        <p class="help-card-text">Do you offer home visits? Yes! We provide UK-wide home service for your convenience. Book an appointment and we'll come to you.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="help-card glass-card">
                        <div class="help-icon-wrapper"><i class="fas fa-shopping-bag"></i></div>
                        <h4 class="help-card-title">Products & Accessories</h4>
                        <p class="help-card-text">Do you sell hair products? Yes! We stock a curated range of premium hair care products and accessories to maintain your beautiful hair at home.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TikTok Videos Section -->
        <section id="tiktok" class="section-padding bg-light-custom">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h5 class="text-primary-custom text-uppercase">Follow Us</h5>
                    <h2>Watch Some of Our TikTok Videos</h2>
                    <p class="opacity-75">Check out our latest dreadlock styles, tutorials and transformations on TikTok!</p>
                    <a href="https://www.tiktok.com/@ashlocs_dreadlocks" target="_blank" class="btn btn-primary-custom mt-3">
                        <i class="fab fa-tiktok me-2"></i>Follow us on TikTok
                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="glass-card text-center">
                            <div class="service-icon mx-auto mb-3"><i class="fab fa-tiktok"></i></div>
                            <h5>1,200 Views</h5>
                            <p class="small opacity-75">Check out our TikTok for amazing dreadlock content!</p>
                            <div class="d-flex justify-content-center gap-3 mt-3">
                                <span><i class="fas fa-heart text-danger"></i> 150</span>
                                <span><i class="fas fa-comment"></i> 25</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="glass-card text-center">
                            <div class="service-icon mx-auto mb-3"><i class="fab fa-tiktok"></i></div>
                            <h5>980 Views</h5>
                            <p class="small opacity-75">Follow us on TikTok @ashlocs_dreadlocks</p>
                            <div class="d-flex justify-content-center gap-3 mt-3">
                                <span><i class="fas fa-heart text-danger"></i> 120</span>
                                <span><i class="fas fa-comment"></i> 18</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="glass-card text-center">
                            <div class="service-icon mx-auto mb-3"><i class="fab fa-tiktok"></i></div>
                            <h5>1,500 Views</h5>
                            <p class="small opacity-75">Latest dreadlock styles and tutorials</p>
                            <div class="d-flex justify-content-center gap-3 mt-3">
                                <span><i class="fas fa-heart text-danger"></i> 200</span>
                                <span><i class="fas fa-comment"></i> 35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="section-padding testimonial-section">
            <div class="hero-floating-icon" style="top: 10%; left: 10%; font-size: 1.5rem; animation: floatIcon1 18s infinite linear;">
                <i class="fas fa-quote-right opacity-50"></i>
            </div>

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <h5 class="text-primary-custom text-uppercase">Client Stories</h5>
                        <h2>What Our Clients Say About Us</h2>
                        <p class="opacity-75">Don't just take our word for it. Here's what our satisfied clients say about Ashlocs.</p>
                    </div>
                </div>

                <?php if($testimonials->count() > 0): ?>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-10">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item <?php echo e($index === 0 ? 'active' : ''); ?>">
                                    <div class="testimonial-card glass-card">
                                        <div class="testimonial-quote-icon">"</div>
                                        <div class="star-rating">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <?php if($i <= $testimonial->rating): ?>
                                                    <i class="fas fa-star"></i>
                                                <?php elseif($i - 0.5 <= $testimonial->rating): ?>
                                                    <i class="fas fa-star-half-alt"></i>
                                                <?php else: ?>
                                                    <i class="far fa-star"></i>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                        <p class="testimonial-text"><?php echo e($testimonial->content); ?></p>
                                        <div class="client-info">
                                            <div class="client-details">
                                                <h5><?php echo e($testimonial->client_organization); ?></h5>
                                                <span><?php echo e($testimonial->client_name); ?>, <?php echo e($testimonial->client_position); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <?php if($testimonials->count() > 1): ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon p-3 bg-primary rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon p-3 bg-primary rounded-circle" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                            <div class="carousel-indicators" style="bottom: -50px;">
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="<?php echo e($index); ?>" 
                                    class="<?php echo e($index === 0 ? 'active' : ''); ?>" aria-current="<?php echo e($index === 0 ? 'true' : 'false'); ?>" 
                                    aria-label="Slide <?php echo e($index + 1); ?>"></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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
                        <h2>Send a Message</h2>
                        <p class="mb-5">Have questions or want to book an appointment? Contact us today!</p>

                        <div class="d-flex align-items-start mb-4">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Location</h5>
                                <p class="opacity-75">UK-wide Home Service and 9 Union St RG1 1EU - United Kingdom</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-phone-alt"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Phone</h5>
                                <p class="opacity-75">+447724500349</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.2rem; margin-bottom: 0;"><i class="fas fa-envelope"></i></div>
                            <div class="ms-3">
                                <h5 class="mb-1">Email</h5>
                                <p class="opacity-75">bookings@ashlocs.co.uk</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="glass-card">
                            <form class="contact-form" action="<?php echo e(route('contact.submit')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
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
                            <span style="color:#F26522;">Ash</span><span style="color:#ffffff;">locs</span>
                        </a>
                        <p class="small text-white mb-4">We specialize in dreadlocks, offering everything from starter locs (crochet) and traditional full-head locs to partial/top locs, Sisterlocks and microlocs and expert re-locking and maintenance.</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/share/183aATKKiS/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ashlocs" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@ashlocs_dreadlocks" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Services</h5>
                        <a href="#home" class="footer-link">Home</a>
                        <a href="#about" class="footer-link">About Us</a>
                        <a href="#portfolio" class="footer-link">Our Portfolios</a>
                        <a href="#services" class="footer-link">Our Services</a>
                        <a href="#contact" class="footer-link">Contact Us</a>
                    </div>
                    <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Company</h5>
                        <a href="#faq" class="footer-link">FAQs</a>
                        <a href="#testimonials" class="footer-link">Testimonials</a>
                        <a href="#tiktok" class="footer-link">TikTok</a>
                        <a href="#shop" class="footer-link">Shop</a>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="mb-3 fs-6 text-white text-uppercase">Newsletter</h5>
                        <p class="small text-muted">Subscribe our newsletter to get the latest news and updates!</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter email" style="border:none; border-radius: 20px 0 0 20px;">
                            <button class="btn btn-primary-custom" type="button" style="border-radius: 0 20px 20px 0;">Subscribe</button>
                        </div>
                    </div>
                </div>
                <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
                <div class="text-center small text-white">
                    &copy; <span id="year"></span> Ashlocs. All Rights Reserved.
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
        <script src="<?php echo e(asset('js/it-scripts.js')); ?>"></script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/home.blade.php ENDPATH**/ ?>