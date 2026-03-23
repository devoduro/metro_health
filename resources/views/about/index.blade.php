<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Metro Health</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/it-styles.css') }}">
</head>
<body>
    @include('partials.navigation')

    <!-- Page Header -->
    <section class="hero-section" style="min-height: 50vh;">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center text-center" style="min-height: 50vh;">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 mb-4">About Ashlocs</h1>
                    <p class="lead">We Provide Professional Hair Care Services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="about-img-grid">
                        <div class="about-img-item animate-float" style="animation-delay: 0s;"><i class="fas fa-cut"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1s;"><i class="fas fa-scissors"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 0.5s;"><i class="fas fa-users"></i></div>
                        <div class="about-img-item animate-float" style="animation-delay: 1.5s;"><i class="fas fa-star"></i></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Who We Are</h2>
                    <p class="mb-4">We are a full-service hair care studio specializing in dreadlocks, braids, haircuts and haircare education. With a team of skilled professionals, we offer tailored services for all hair types. We also run expert-led workshops and stock a curated range of hair products and accessories.</p>
                    <p class="mb-4">At Ashlocs, we combine experience, attention to detail and genuine customer care to create a space where hair is treated as an art—and clients are treated like family.</p>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-4 mb-5">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-award"></i></div>
                        <h3 class="mb-2">10+</h3>
                        <p class="small opacity-75 mb-0">Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-users"></i></div>
                        <h3 class="mb-2">500+</h3>
                        <p class="small opacity-75 mb-0">Clients Satisfied</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-star"></i></div>
                        <h3 class="mb-2">4.9</h3>
                        <p class="small opacity-75 mb-0">Average Rating</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-graduation-cap"></i></div>
                        <h3 class="mb-2">Expert</h3>
                        <p class="small opacity-75 mb-0">Training Available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding bg-light-custom">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="mb-4">Why Choose Ashlocs?</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-user-check"></i></div>
                        <h5 class="mb-3">Skilled Professionals</h5>
                        <p class="small opacity-75">Our team of expert stylists brings years of experience and passion to every service.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-palette"></i></div>
                        <h5 class="mb-3">Tailored Services</h5>
                        <p class="small opacity-75">We customize our services to suit your unique hair type and style preferences.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-home"></i></div>
                        <h5 class="mb-3">UK-wide Service</h5>
                        <p class="small opacity-75">We offer convenient home service across the UK for your comfort.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-card text-center h-100">
                        <div class="service-icon mx-auto mb-3"><i class="fas fa-heart"></i></div>
                        <h5 class="mb-3">Genuine Care</h5>
                        <p class="small opacity-75">We treat every client like family, ensuring a comfortable and welcoming experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="mb-4">Ready to Experience the Ashlocs Difference?</h2>
                    <p class="lead mb-4">Book your appointment today and let us elevate your crown.</p>
                    <a href="{{ route('clinic-appointments.index') }}" class="btn btn-primary-custom btn-lg">Book Appointment</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/it-scripts.js') }}"></script>
</body>
</html>
