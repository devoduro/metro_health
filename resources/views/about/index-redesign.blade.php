<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('partials.seo', [
        'title' => 'About Us',
        'description' => 'Learn about Ashlocs - professional hair care specialists with 10+ years experience in dreadlocks, braiding and textured hair services across the UK.',
        'keywords' => 'about ashlocs, hair care specialists, dreadlock experts, professional braiding, UK hair salon, textured hair professionals'
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

    <!-- Page Hero -->
    <section style="background: linear-gradient(135deg, #FFF5F0 0%, #FFFFFF 100%); padding: 100px 0 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-3" style="color: var(--ashlocs-dark);">Our Story</h1>
                    <p class="lead" style="font-size: 1.2rem; color: var(--ashlocs-gray);">
                       The name Ashlocs derived from (Ashanti Dreadlocks) reflects individuality and strength. It represents growth, transformation and personal roots  just like the loc journey itself. Inspired by the heritage behind “Ashanti” the brand carries a deep respect for African culture, tradition and the significance of natural hair.
This business was built on skill, experience and a genuine passion for healthy loc maintenance. Every appointment is approached with attention to detail, professionalism and respect for your time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('images/about/2026-01-12-cZWfH5uy.jpeg') }}" alt="Ashlocs Professional Hair Care" style="width: 100%; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700;">Expert Hair Care for Textured Hair</h2>
                    <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8; color: var(--ashlocs-gray);">
                        At Ashlocs, we specialize in professional hair care services for textured hair. Our work is rooted in skill, creativity and deep respect for every client's hair journey.
                    </p>
                    <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8; color: var(--ashlocs-gray);">
                        Whether you're starting fresh locs, maintaining mature dreadlocks, getting beautiful braids, or exploring a bold new style, we deliver results with precision, care and professionalism.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-6">
                            <div class="text-center p-3" style="background: #FFF5F0; border-radius: 15px;">
                                <h3 style="font-size: 2rem; font-weight: 700; color: var(--ashlocs-orange); margin-bottom: 5px;">500+</h3>
                                <p style="margin: 0; font-size: 0.9rem; color: var(--ashlocs-gray);">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3" style="background: #FFF5F0; border-radius: 15px;">
                                <h3 style="font-size: 2rem; font-weight: 700; color: var(--ashlocs-orange); margin-bottom: 5px;">10+</h3>
                                <p style="margin: 0; font-size: 0.9rem; color: var(--ashlocs-gray);">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer -->
    <section class="section-padding" style="background: var(--ashlocs-light);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--ashlocs-dark);">What We Offer</h2>
                    <p style="font-size: 1.1rem; color: var(--ashlocs-gray); max-width: 600px; margin: 20px auto 0;">Comprehensive hair care services tailored to your needs</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4" style="background: white; border-radius: 15px; height: 100%;">
                        <div class="mb-3">
                            <i class="fas fa-cut" style="font-size: 2.5rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h4 style="font-weight: 700; margin-bottom: 15px;">Dreadlocks Services</h4>
                        <p style="color: var(--ashlocs-gray); line-height: 1.7;">From starter locs to maintenance, extensions, styling and coloring. We specialize in all types of locs including traditional, sisterlocks and micro locs.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4" style="background: white; border-radius: 15px; height: 100%;">
                        <div class="mb-3">
                            <i class="fas fa-spa" style="font-size: 2.5rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h4 style="font-weight: 700; margin-bottom: 15px;">Braiding Services</h4>
                        <p style="color: var(--ashlocs-gray); line-height: 1.7;">Beautiful protective styles including box braids, knotless braids, cornrows, goddess braids and Senegalese twists.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4" style="background: white; border-radius: 15px; height: 100%;">
                        <div class="mb-3">
                            <i class="fas fa-scissors" style="font-size: 2.5rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h4 style="font-weight: 700; margin-bottom: 15px;">Haircut Services</h4>
                        <p style="color: var(--ashlocs-gray); line-height: 1.7;">Professional cuts for men, women and children. Specializing in fades, shape-ups and textured hair cutting.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4" style="background: white; border-radius: 15px; height: 100%;">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h4 style="font-weight: 700; margin-bottom: 15px;">Training & Workshops</h4>
                        <p style="color: var(--ashlocs-gray); line-height: 1.7;">Professional training programs in dreadlocks, braiding and haircut techniques. Group sessions and 1:1 mentoring available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Us -->
    <section class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--ashlocs-dark);">Why Choose Ashlocs</h2>
                    <p style="font-size: 1.1rem; color: var(--ashlocs-gray); max-width: 600px; margin: 20px auto 0;">What makes us different</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-award" style="font-size: 3rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h5 style="font-weight: 700; margin-bottom: 10px;">Excellence</h5>
                        <p style="color: var(--ashlocs-gray); font-size: 0.95rem;">Highest quality results in every service</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-heart" style="font-size: 3rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h5 style="font-weight: 700; margin-bottom: 10px;">Genuine Care</h5>
                        <p style="color: var(--ashlocs-gray); font-size: 0.95rem;">Personalized attention for every client</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-home" style="font-size: 3rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h5 style="font-weight: 700; margin-bottom: 10px;">Home Service</h5>
                        <p style="color: var(--ashlocs-gray); font-size: 0.95rem;">UK-wide mobile service available</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-clock" style="font-size: 3rem; color: var(--ashlocs-orange);"></i>
                        </div>
                        <h5 style="font-weight: 700; margin-bottom: 10px;">Flexible</h5>
                        <p style="color: var(--ashlocs-gray); font-size: 0.95rem;">Convenient scheduling options</p>
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
                    <h2>Ready to Experience the Ashlocs Difference?</h2>
                    <p>Book your appointment today and let us elevate your crown with professional hair care services.</p>
                    <a href="{{ route('booking.index') }}" class="btn btn-white-custom btn-lg">
                        <i class="fas fa-calendar-check me-2"></i>Book an Appointment
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
