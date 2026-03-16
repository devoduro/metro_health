<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('partials.seo', [
        'title' => 'Our Gallery - Metro Health Hospital',
        'description' => 'Explore our state-of-the-art medical facility, modern equipment, and welcoming environment at Metro Health Hospital.',
        'keywords' => 'metro health gallery, hospital facility, medical equipment, healthcare facility kumasi'
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
    <!-- Top Header Bar -->
    @include('partials.top_header')
    
    <!-- Main Navbar -->
    @include('partials.navigation')
    
    <!-- Page Hero -->
    <section class="gallery-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    </br></br>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </nav>
                    <h1 class="hero-title">Explore Our Facility</h1>
                    <p class="hero-subtitle">
                        Take a visual tour of our state-of-the-art medical facility, modern equipment, and welcoming environment
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section section-padding">
        <div class="container">
            <div class="row g-4">
                @php
                    // Get all resized gallery images
                    $galleryDir = public_path('images/gallery/resized');
                    $galleryImages = glob($galleryDir . '/*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);
                    
                    $galleryItems = [];
                    foreach ($galleryImages as $imagePath) {
                        $filename = basename($imagePath);
                        $galleryItems[] = [
                            'title' => 'Metro Health Hospital',
                            'image' => asset('images/gallery/resized/' . $filename),
                            'category' => 'Gallery'
                        ];
                    }
                @endphp

                @foreach($galleryItems as $index => $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                            <div class="gallery-overlay">
                                <div class="gallery-info">
                                    <span class="gallery-category">{{ $item['category'] }}</span>
                                    <h4 class="gallery-title">{{ $item['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Mission Statement Section -->
    <section class="mission-section section-padding" style="background: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center" data-aos="fade-up">
                    <h2 class="section-title">Our Commitment to Excellence</h2>
                    <p class="section-description">
                        At Metro Health, our mission is to provide patient-centered healthcare marked by empathy, excellence, and a genuine passion for improving the well-being of every individual who walks through our doors. While we are especially recognized for our exceptional care for the elderly, our team of highly skilled and experienced medical professionals spans a wide range of specialties.
                    </p>
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

    <style>
    .gallery-hero {
        background: linear-gradient(135deg, #a8207a 0%, #7ba428 100%);
        padding: 120px 0 80px;
        margin-top: 44px;
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
        margin-bottom: 20px;
    }

    .hero-subtitle {
        color: rgba(255, 255, 255, 0.95);
        font-size: 1.2rem;
        line-height: 1.8;
    }

    .gallery-section {
        padding: 80px 0;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .gallery-image {
        position: relative;
        overflow: hidden;
        height: 300px;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover .gallery-image img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(168, 32, 122, 0.95) 0%, rgba(123, 164, 40, 0.7) 100%);
        display: flex;
        align-items: flex-end;
        padding: 25px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-info {
        width: 100%;
    }

    .gallery-category {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .gallery-title {
        color: white;
        font-size: 1.3rem;
        font-weight: 700;
        margin: 0;
    }

    .mission-section {
        padding: 80px 0;
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

    @media (max-width: 991px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .gallery-image {
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

        .hero-subtitle {
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .gallery-image {
            height: 220px;
        }

        .gallery-title {
            font-size: 1.1rem;
        }
    }
    </style>
</body>
</html>
