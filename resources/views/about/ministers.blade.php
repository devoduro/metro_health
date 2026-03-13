@extends('layouts.app')

@section('title', 'Roll of Ministers - PCG Monninger Congregation')

@section('content')
<!-- Hero Header with Background Image -->
<section class="relative pt-32 pb-24 overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=1920&h=600&fit=crop" alt="Ministers" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-pcg-blue-900/95 via-pcg-blue-900/90 to-pcg-red-900/95"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      
        <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white text-shadow-lg" data-aos="fade-up" data-aos-delay="200">Roll of Ministers</h1>
        <p class="text-2xl md:text-3xl text-gray-100 mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">Honoring Our Faithful Shepherds</p>
        <div class="w-24 h-1 bg-pcg-red-400 mx-auto animate-expand" data-aos="zoom-in" data-aos-delay="600"></div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="decorative-line"></div>
            <h2 class="text-4xl md:text-5xl font-bold text-pcg-blue-900 mb-6" data-aos="fade-up" data-aos-delay="100">Current Ministers</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Since our establishment, the Monninger Congregation has been blessed with faithful shepherds 
                who have guided us with wisdom, dedication and love for God's people.
            </p>
        </div>

        <!-- Current Minister Spotlight -->
        <div class="mb-20" data-aos="zoom-in" data-aos-duration="1000">
            <div class="bg-gradient-to-br from-pcg-blue-900 to-pcg-red-900 rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-96 lg:h-auto overflow-hidden">
                        <img src="{{ asset('images/minister.jpg') }}" alt="Current Minister" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-pcg-blue-900/50 to-transparent"></div>
                    </div>
                    <div class="p-12 lg:p-16 text-white">
                        <div class="inline-block bg-pcg-blue-500 px-4 py-2 rounded-full text-sm font-bold mb-6 animate-pulse">District Minister</div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Rev. George Agyei Kwabi</h2>
                        
                        <p class="text-2xl text-pcg-red-300 mb-6 font-semibold">2024 - Present</p>
                        <p class="text-lg leading-relaxed mb-6">
                            Leading our congregation with vision, wisdom and dedication. Under his pastoral care, 
                            the Monninger Congregation continues to grow spiritually and numerically, impacting our 
                            community with the transforming power of the Gospel.
                        </p>
                        <div class="flex items-center space-x-4">
                           <!-- <div class="icon-circle bg-white/20 backdrop-blur-lg border-2 border-white/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div> -->
                                 </div>
                    </div>
                </div>
            </div>
        </div>




               <div class="mb-20" data-aos="zoom-in" data-aos-duration="1000">
            <div class="bg-gradient-to-br from-pcg-blue-900 to-pcg-red-900 rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-96 lg:h-auto overflow-hidden">
                        <img src="{{ asset('images/minister.jpg') }}" alt="Current Minister" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-pcg-blue-900/50 to-transparent"></div>
                    </div>
                    <div class="p-12 lg:p-16 text-white">
                        <div class="inline-block bg-pcg-blue-500 px-4 py-2 rounded-full text-sm font-bold mb-6 animate-pulse">Associate Minister</div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Rev. George Agyei Kwabi</h2>
                        
                        <p class="text-2xl text-pcg-red-300 mb-6 font-semibold">2024 - Present</p>
                        <p class="text-lg leading-relaxed mb-6">
                            Leading our congregation with vision, wisdom and dedication. Under his pastoral care, 
                            the Monninger Congregation continues to grow spiritually and numerically, impacting our 
                            community with the transforming power of the Gospel.
                        </p>
                        <div class="flex items-center space-x-4">
                           <!-- <div class="icon-circle bg-white/20 backdrop-blur-lg border-2 border-white/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div> -->
                                 </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Past Ministers Timeline -->
        <div class="mb-20">
            <div class="text-center mb-12" data-aos="fade-up">
                <h3 class="text-3xl md:text-4xl font-bold text-pcg-blue-900 mb-4">Past Reverend Ministers</h3>
                <p class="text-lg text-gray-600">A legacy of faithful service spanning over 60 years</p>
            </div>
            
            <div class="relative max-w-5xl mx-auto">
                <!-- Timeline Line -->
                <div class="absolute left-12 top-0 bottom-0 w-1 bg-gradient-to-b from-pcg-blue-500 via-pcg-red-500 to-pcg-blue-500 hidden md:block"></div>
                
                <div class="space-y-6">
                    @php
                    $ministers = [
                        ['name' => 'Rev. I.A. Tenkorang', 'years' => '1969 - 1973', 'duration' => '4 years', 'color' => 'blue'],
                        ['name' => 'Rev. B.D. Ansong', 'years' => '1973 - 1976', 'duration' => '3 years', 'color' => 'red'],
                        ['name' => 'Rev. A. Asare Gyang', 'years' => '1976 - 1980', 'duration' => '4 years', 'color' => 'blue'],
                        ['name' => 'Rev. C.K. Ahorble', 'years' => '1980 - 1982', 'duration' => '2 years', 'color' => 'red'],
                        ['name' => 'Rev. Dora Ofori-Owusu', 'years' => '1982 - 1984', 'duration' => '2 years', 'color' => 'blue'],
                        ['name' => 'Rev. E. T. Terkpetey', 'years' => '1984 - 1991', 'duration' => '7 years', 'color' => 'red'],
                        ['name' => 'Rev. E. P. Gyampoh', 'years' => '1991 - 1994', 'duration' => '3 years', 'color' => 'blue'],
                        ['name' => 'Rev. J.S. Akonnor', 'years' => '1994 - 1996', 'duration' => '2 years', 'color' => 'red'],
                        ['name' => 'Rev. M.C.A. Otu', 'years' => '1996 - 1999', 'duration' => '3 years', 'color' => 'blue'],
                        ['name' => 'Rev. Bruce Asare', 'years' => '1999 - 2001', 'duration' => '2 years', 'color' => 'red'],
                        ['name' => 'Rev. M. Opoku Agyeman', 'years' => '2001 - 2003', 'duration' => '2 years', 'color' => 'blue'],
                        ['name' => 'Rev. Patrick Ntim-Manteaw', 'years' => '2003 - 2006', 'duration' => '3 years', 'color' => 'red'],
                        ['name' => 'Rev. Frank Oguase Adu', 'years' => '2006 - 2007', 'duration' => '1 year', 'color' => 'blue'],
                        ['name' => 'Rev. David Osei Asare', 'years' => '2007 - 2012', 'duration' => '5 years', 'color' => 'red'],
                        ['name' => 'Rev. Justice K. Asumeng', 'years' => '2012 - 2016', 'duration' => '4 years', 'color' => 'blue'],
                        ['name' => 'Rev. Patrick Ntoni Sasu', 'years' => '2016 - 2020', 'duration' => '4 years', 'color' => 'red'],
                        ['name' => 'Rev. Reynolds O. Ankamah', 'years' => '2020 - 2024', 'duration' => '4 years', 'color' => 'blue'],
                     ];
                    @endphp

                    @foreach($ministers as $index => $minister)
                    <div class="flex items-start gap-6 md:ml-20 group" data-aos="fade-left" data-aos-delay="{{ $index * 50 }}" data-aos-duration="600">
                        <!-- Timeline Dot -->
                        <div class="flex-shrink-0 hidden md:block -ml-24 relative">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pcg-{{ $minister['color'] }}-500 to-pcg-{{ $minister['color'] }}-700 border-4 border-white shadow-xl group-hover:scale-125 transition duration-300 flex items-center justify-center">
                                <span class="text-white font-bold text-xs">{{ $index + 1 }}</span>
                            </div>
                        </div>
                        
                        <!-- Minister Card -->
                        <div class="flex-grow bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border-2 border-pcg-{{ $minister['color'] }}-100 group-hover:border-pcg-{{ $minister['color'] }}-300 hover:-translate-y-2">
                            <div class="flex flex-col md:flex-row">
                                <!-- Left Section - Name & Icon -->
                                <div class="bg-gradient-to-br from-pcg-{{ $minister['color'] }}-500 to-pcg-{{ $minister['color'] }}-700 p-6 md:w-2/3 text-white group-hover:from-pcg-{{ $minister['color'] }}-600 group-hover:to-pcg-{{ $minister['color'] }}-800 transition-all duration-500">
                                    <div class="flex items-start gap-4">
                                        <div class="icon-circle bg-white/20 backdrop-blur-lg border-2 border-white/30 flex-shrink-0 group-hover:rotate-12 group-hover:scale-110 transition-transform duration-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-grow">
                                            <h4 class="text-2xl font-bold mb-2">{{ $minister['name'] }}</h4>
                                            <p class="text-{{ $minister['color'] }}-100 text-sm">Reverend Minister</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Right Section - Years -->
                                <div class="bg-gradient-to-br from-pcg-{{ $minister['color'] }}-50 to-white p-6 md:w-1/3 flex flex-col justify-center items-center border-l-2 border-pcg-{{ $minister['color'] }}-200">
                                    <div class="text-center">
                                        <p class="text-3xl font-bold text-pcg-{{ $minister['color'] }}-700 mb-1">{{ $minister['years'] }}</p>
                                        <p class="text-sm text-gray-600 font-semibold">{{ $minister['duration'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Tribute Section -->
<section class="py-20 bg-pcg-blue-900 text-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="zoom-in" data-aos-delay="200">In Grateful Remembrance</h2>
        <p class="text-xl leading-relaxed mb-8">
            We give thanks to God for all the ministers who have faithfully served the Monninger Congregation. 
            Their dedication, sacrifice and love for God's people have shaped our church into what it is today. 
            May their legacy continue to inspire us to serve Christ with excellence.
        </p>
        <blockquote class="text-2xl italic border-l-4 border-pcg-red-400 pl-6 text-left inline-block hover:border-l-8 transition-all duration-300" data-aos="fade-left" data-aos-delay="400">
            "Well done, good and faithful servant! You have been faithful with a few things; 
            I will put you in charge of many things. Come and share your master's happiness!"
            <footer class="text-lg mt-4">- Matthew 25:23</footer>
        </blockquote>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Initialize AOS (Animate On Scroll)
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 100
            });
        }
    });
</script>
@endpush

@push('styles')
<style>
    /* Custom animations */
    @keyframes bounce-slow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    @keyframes expand {
        from {
            width: 0;
        }
        to {
            width: 6rem;
        }
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    
    .animate-expand {
        animation: expand 1s ease-out forwards;
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Enhanced hover effects */
    .group:hover .icon-circle,
    .group:hover .icon-circle-lg {
        transform: rotate(12deg) scale(1.1);
    }
    
    /* Stagger animation for timeline items */
    .space-y-6 > div {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Add stagger delay */
    .space-y-6 > div:nth-child(1) { animation-delay: 0.1s; }
    .space-y-6 > div:nth-child(2) { animation-delay: 0.2s; }
    .space-y-6 > div:nth-child(3) { animation-delay: 0.3s; }
    .space-y-6 > div:nth-child(4) { animation-delay: 0.4s; }
    .space-y-6 > div:nth-child(5) { animation-delay: 0.5s; }
    .space-y-6 > div:nth-child(6) { animation-delay: 0.6s; }
    .space-y-6 > div:nth-child(7) { animation-delay: 0.7s; }
    .space-y-6 > div:nth-child(8) { animation-delay: 0.8s; }
    .space-y-6 > div:nth-child(9) { animation-delay: 0.9s; }
    .space-y-6 > div:nth-child(10) { animation-delay: 1.0s; }
    .space-y-6 > div:nth-child(11) { animation-delay: 1.1s; }
    .space-y-6 > div:nth-child(12) { animation-delay: 1.2s; }
    .space-y-6 > div:nth-child(13) { animation-delay: 1.3s; }
    .space-y-6 > div:nth-child(14) { animation-delay: 1.4s; }
    .space-y-6 > div:nth-child(15) { animation-delay: 1.5s; }
    .space-y-6 > div:nth-child(16) { animation-delay: 1.6s; }
</style>
@endpush
