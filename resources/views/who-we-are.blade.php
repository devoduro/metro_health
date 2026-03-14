@extends('layouts.app')

@section('title', 'Who We Are - Metro Health Hospital')

@section('content')
<!-- Page Hero -->
<section class="who-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </nav>
                <h1 class="hero-title">About Metro Health Hospital</h1>
            </div>
        </div>
    </div>
</section>

<!-- Our Brief History Section -->
<section class="history-section section-padding">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Brief History</h2>
                <p class="section-description">
                    Established in 2011, Metro Health Hospital is a premier healthcare facility located at Abrepo Junction in Kumasi Metropolis. We combine cutting-edge medical technology with compassionate care.
                </p>
            </div>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="row g-4 mb-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="value-title">Our Mission</h3>
                    <p class="value-text">
                        To provide quality and comprehensive care for our patients, with a passion for excellence
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="value-title">Our Vision</h3>
                    <p class="value-text">
                        To become the Region's most trusted healthcare provider, known for clinical excellence, compassionate and comprehensive care, and a Premier destination for the care of older adults.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="value-title">Core Values</h3>
                    <p class="value-text">
                        <strong>P</strong>–Passion<br>
                        <strong>E</strong>–Excellence<br>
                        <strong>A</strong>–Accountability<br>
                        <strong>C</strong>–Commitment<br>
                        <strong>E</strong>-Empathy
                    </p>
                </div>
            </div>
        </div>

        <!-- Additional Content -->
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="content-box">
                    <p class="content-text">
                        At Metro Health, our mission is to provide patient-centered healthcare marked by empathy, excellence, and a genuine passion for improving the well-being of every individual who walks through our doors. While we are especially recognized for our exceptional care for the elderly, our team of highly skilled and experienced medical professionals spans a wide range of specialties.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Section -->
<section class="image-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="image-wrapper">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800" alt="Metro Health Hospital Facility" class="section-image">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="image-wrapper">
                    <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=800" alt="Metro Health Hospital Care" class="section-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section section-padding">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose Metro Health Hospital</h2>
                <p class="section-description">
                    Excellence in healthcare with compassion and dedication
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h4 class="feature-title">Expert Medical Team</h4>
                    <p class="feature-text">Highly skilled and experienced healthcare professionals</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4 class="feature-title">Modern Facilities</h4>
                    <p class="feature-text">State-of-the-art medical equipment and technology</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4 class="feature-title">Compassionate Care</h4>
                    <p class="feature-text">Patient-centered approach with empathy and dedication</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 class="feature-title">24/7 Emergency</h4>
                    <p class="feature-text">Round-the-clock emergency services available</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.who-hero {
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    padding: 120px 0 80px;
}

.who-hero .breadcrumb {
    background: transparent;
    margin-bottom: 20px;
}

.who-hero .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.who-hero .breadcrumb-item.active {
    color: white;
}

.hero-title {
    color: white;
    font-size: 3rem;
    font-weight: 800;
}

.history-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.section-title {
    color: #2d3e50;
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 20px;
}

.section-description {
    color: #666;
    font-size: 1.2rem;
    line-height: 1.8;
}

.value-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.value-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.value-icon i {
    font-size: 2.5rem;
    color: white;
}

.value-title {
    color: #2d3e50;
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
}

.value-text {
    color: #666;
    font-size: 1rem;
    line-height: 1.7;
}

.content-box {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.content-text {
    color: #666;
    font-size: 1.1rem;
    line-height: 1.8;
    margin: 0;
}

.image-section {
    padding: 60px 0;
    background: white;
}

.image-wrapper {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.section-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.image-wrapper:hover .section-image {
    transform: scale(1.05);
}

.why-choose-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.feature-box {
    text-align: center;
    padding: 30px 20px;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    transition: all 0.3s ease;
}

.feature-box:hover .feature-icon {
    transform: scale(1.1);
}

.feature-icon i {
    font-size: 2rem;
    color: white;
}

.feature-title {
    color: #2d3e50;
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 15px;
}

.feature-text {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
}

@media (max-width: 991px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .section-image {
        height: 300px;
    }
}

@media (max-width: 767px) {
    .who-hero {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .value-card {
        padding: 30px 20px;
    }

    .content-box {
        padding: 30px 20px;
    }

    .section-image {
        height: 250px;
    }
}
</style>
@endpush
