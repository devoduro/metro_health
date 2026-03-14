@extends('layouts.app')

@section('title', 'Our Team - Metro Health Hospital')

@section('content')
<!-- Page Hero -->
<section class="team-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our Team</li>
                    </ol>
                </nav>
                <h1 class="hero-title">Our Team</h1>
                <p class="hero-subtitle">
                    At Metro Health, our mission is to provide patient-centered healthcare marked by empathy, excellence, and a genuine passion for improving the well-being of every individual who walks through our doors. While we are especially recognized for our exceptional care for the elderly, our team of highly skilled and experienced medical professionals spans a wide range of specialties.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section section-padding">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="section-title">Meet Our Management Team</h2>
                <p class="section-description">
                    Dedicated professionals leading with passion, expertise, and commitment to excellence
                </p>
            </div>
        </div>

        <div class="row g-4">
            @php
                $teamMembers = [
                    [
                        'name' => 'Dr. Emmanuel Mensah',
                        'position' => 'Medical Director',
                        'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400',
                        'specialty' => 'General Practice & Geriatric Care'
                    ],
                    [
                        'name' => 'Dr. Grace Osei',
                        'position' => 'Head of Obstetrics & Gynaecology',
                        'image' => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400',
                        'specialty' => 'Women\'s Health Specialist'
                    ],
                    [
                        'name' => 'Dr. Kwame Asante',
                        'position' => 'Chief Pediatrician',
                        'image' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400',
                        'specialty' => 'Child Healthcare Expert'
                    ],
                    [
                        'name' => 'Dr. Akua Boateng',
                        'position' => 'ENT Specialist',
                        'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400',
                        'specialty' => 'Ear, Nose & Throat Care'
                    ],
                    [
                        'name' => 'Mrs. Abena Owusu',
                        'position' => 'Head Nurse',
                        'image' => 'https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=400',
                        'specialty' => 'Patient Care Coordinator'
                    ],
                    [
                        'name' => 'Mr. Kofi Adjei',
                        'position' => 'Hospital Administrator',
                        'image' => 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400',
                        'specialty' => 'Operations Management'
                    ]
                ];
            @endphp

            @foreach($teamMembers as $index => $member)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="team-image">
                        <div class="team-overlay">
                            <p class="team-specialty">{{ $member['specialty'] }}</p>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">{{ $member['name'] }}</h3>
                        <p class="team-position">{{ $member['position'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.team-hero {
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    padding: 120px 0 80px;
}

.team-hero .breadcrumb {
    background: transparent;
    margin-bottom: 20px;
}

.team-hero .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.team-hero .breadcrumb-item.active {
    color: white;
}

.hero-title {
    color: white;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
}

.hero-subtitle {
    color: rgba(255, 255, 255, 0.95);
    font-size: 1.1rem;
    line-height: 1.8;
}

.team-section {
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
    font-size: 1.1rem;
    line-height: 1.7;
}

.team-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.team-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 350px;
}

.team-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.team-card:hover .team-image {
    transform: scale(1.1);
}

.team-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(168, 32, 122, 0.95), transparent);
    padding: 30px 20px 20px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.team-card:hover .team-overlay {
    transform: translateY(0);
}

.team-specialty {
    color: white;
    font-size: 0.95rem;
    margin: 0;
    font-weight: 500;
}

.team-info {
    padding: 25px;
    text-align: center;
}

.team-name {
    color: #2d3e50;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.team-position {
    color: #a8207a;
    font-size: 1rem;
    font-weight: 600;
    margin: 0;
}

@media (max-width: 991px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .team-image-wrapper {
        height: 300px;
    }
}

@media (max-width: 767px) {
    .team-hero {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .team-image-wrapper {
        height: 280px;
    }
}
</style>
@endpush
