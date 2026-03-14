@extends('layouts.app')

@section('title', 'Gallery - Metro Health Hospital')

@section('content')
<!-- Page Hero -->
<section class="gallery-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </nav>
                <h1 class="hero-title">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section section-padding">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="section-title">Explore Our Facility</h2>
                <p class="section-description">
                    Take a visual tour of our state-of-the-art medical facility, modern equipment, and welcoming environment
                </p>
            </div>
        </div>

        <div class="row g-4">
            @php
                $galleryItems = [
                    ['title' => 'Admission Area', 'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600'],
                    ['title' => 'Patient Bed', 'image' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600'],
                    ['title' => 'Consulting Room', 'image' => 'https://images.unsplash.com/photo-1519494140681-8b17d830a3e9?w=600'],
                    ['title' => 'Medical Doctor', 'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600'],
                    ['title' => 'Doctor Consultation', 'image' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600'],
                    ['title' => 'Healthcare Professional', 'image' => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=600'],
                    ['title' => 'Eye Care Services', 'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600'],
                    ['title' => 'Eye Examination', 'image' => 'https://images.unsplash.com/photo-1584362917165-526a968579e8?w=600'],
                    ['title' => 'General Practice', 'image' => 'https://images.unsplash.com/photo-1551076805-e1869033e561?w=600'],
                    ['title' => 'Hospital Facility', 'image' => 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=600'],
                    ['title' => 'Nursing Care', 'image' => 'https://images.unsplash.com/photo-1638202993928-7267aad84c31?w=600'],
                    ['title' => 'Nurses Station', 'image' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600'],
                    ['title' => 'Medical Nurses', 'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600'],
                    ['title' => 'Nursing Team', 'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600'],
                    ['title' => 'Pharmacy Services', 'image' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600'],
                    ['title' => 'Hospital Pharmacy', 'image' => 'https://images.unsplash.com/photo-1576602976047-174e57a47881?w=600'],
                    ['title' => 'Reception Area', 'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600'],
                    ['title' => 'Medical Team', 'image' => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=600'],
                    ['title' => 'Healthcare Teamwork', 'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=600'],
                    ['title' => 'Waiting Area', 'image' => 'https://images.unsplash.com/photo-1512678080530-7760d81faba6?w=600'],
                    ['title' => 'Hospital Ward', 'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600']
                ];
            @endphp

            @foreach($galleryItems as $index => $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index % 6 + 1) * 50 }}">
                <div class="gallery-item">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4 class="gallery-title">{{ $item['title'] }}</h4>
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
.gallery-hero {
    background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
    padding: 120px 0 80px;
}

.gallery-hero .breadcrumb {
    background: transparent;
    margin-bottom: 20px;
}

.gallery-hero .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.gallery-hero .breadcrumb-item.active {
    color: white;
}

.hero-title {
    color: white;
    font-size: 3rem;
    font-weight: 800;
}

.gallery-section {
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

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    height: 300px;
    cursor: pointer;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(168, 32, 122, 0.95), transparent);
    padding: 30px 20px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.gallery-title {
    color: white;
    font-size: 1.1rem;
    font-weight: 700;
    margin: 0;
}

@media (max-width: 991px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .gallery-item {
        height: 250px;
    }
}

@media (max-width: 767px) {
    .gallery-hero {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .gallery-item {
        height: 220px;
    }
}
</style>
@endpush
