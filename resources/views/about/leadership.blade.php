@extends('layouts.app')

@section('title', 'Leadership - PCG Monninger Congregation')

@section('content')
<!-- Hero Header with Background Image -->
<section class="relative pt-32 pb-24 overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
    <div class="absolute inset-0">
        <img {{ asset('images/church_building.png') }} alt="Leadership"  alt="Leadership" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-pcg-blue-900/95 via-pcg-blue-800/90 to-pcg-blue-900/95"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="icon-circle-lg bg-white/20 backdrop-blur-lg border-2 border-white/30 mx-auto mb-8 animate-bounce-slow">
            <i class="fas fa-users text-3xl text-white"></i>
        </div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white text-shadow-lg" data-aos="fade-up" data-aos-delay="200">Our Leadership</h1>
        <p class="text-2xl md:text-3xl text-gray-100 mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">Shepherds called to serve God's people</p>
        <div class="w-24 h-1 bg-pcg-red-600 mx-auto animate-expand" data-aos="zoom-in" data-aos-delay="600"></div>
    </div>
</section>

<!-- Year Filter Section -->
<section class="py-8 bg-gray-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4">
            <!-- Search Box -->
            <div class="w-full">
                <div class="relative max-w-md mx-auto">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input 
                        type="text" 
                        id="leadershipSearch" 
                        placeholder="Search by name, title, or position..." 
                        class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-pcg-blue-500 focus:border-pcg-blue-500 transition-all duration-200 shadow-sm"
                        autocomplete="off">
                    <div id="searchResultCount" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-sm text-gray-500 hidden">
                        <span id="resultCount">0</span> results
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <i class="fas fa-filter text-pcg-blue-600 text-xl"></i>
                    <h3 class="text-lg font-semibold text-gray-800">Filter by Year:</h3>
                </div>
                
                <div class="flex flex-wrap items-center gap-3">
                    <!-- All Years Button -->
                    <a href="{{ route('about.leadership') }}" 
                       class="px-6 py-2 rounded-lg font-semibold transition transform hover:scale-105 {{ !$filterYear ? 'bg-pcg-blue-600 text-white shadow-lg' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-100' }}">
                        All Years
                    </a>
                    
                    <!-- Individual Year Buttons -->
                    @foreach($yearMappings as $mapping)
                        <a href="{{ route('about.leadership', ['year' => $mapping['year']]) }}" 
                           class="px-6 py-2 rounded-lg font-semibold transition transform hover:scale-105 {{ $filterYear == $mapping['year'] ? 'bg-pcg-blue-600 text-white shadow-lg' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-100' }}">
                            {{ $mapping['range'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            <!-- Year Range Indicator -->
            @if(!$filterYear && $availableYears->count() > 0)
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        <i class="fas fa-info-circle text-pcg-blue-500 mr-1"></i>
                        <span class="font-semibold">Available Years:</span> 
                        <span class="text-gray-700">{{ $availableYears->join(', ') }}</span>
                        <span class="text-gray-500 ml-2">({{ $availableYears->count() }} {{ Str::plural('period', $availableYears->count()) }})</span>
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Leadership Content -->
<section class="py-20 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($filterYear)
            <div class="mb-8 bg-blue-50 border-l-4 border-pcg-blue-600 p-4 rounded-lg" data-aos="fade-down">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-info-circle text-pcg-blue-600 text-xl"></i>
                        <p class="text-gray-800">
                            <span class="font-semibold">Showing leadership for:</span> 
                            <span class="text-pcg-blue-700 font-bold">{{ $filterYear }}</span>
                            <span class="text-gray-600 ml-2">({{ $leadershipByYear->flatten()->count() }} {{ Str::plural('member', $leadershipByYear->flatten()->count()) }})</span>
                        </p>
                    </div>
                    <a href="{{ route('about.leadership') }}" class="text-pcg-blue-600 hover:text-pcg-blue-800 font-semibold flex items-center gap-2">
                        <i class="fas fa-times"></i> Clear Filter
                    </a>
                </div>
            </div>
        @endif
        
        @if($leadershipByYear->count())
            @foreach($leadershipByYear as $year => $leaders)
                @php
                    $index = $loop->index;
                @endphp
                <div class="mb-12">
                    <!-- Year Header - Collapsible -->
                    @php
                        // Check if this year is marked as current in the database
                        $isCurrentYear = ($currentYear && $year === $currentYear);
                        
                        // Colorful gradient backgrounds - rotate through elegant color schemes
                        $gradients = [
                            'from-blue-600 via-purple-600 to-pink-600',
                            'from-emerald-600 via-teal-600 to-cyan-600',
                            'from-orange-600 via-red-600 to-rose-600',
                            'from-indigo-600 via-blue-600 to-sky-600',
                            'from-violet-600 via-fuchsia-600 to-pink-600',
                            'from-amber-600 via-orange-600 to-red-600',
                        ];
                        
                        $borderColors = [
                            'border-pink-400',
                            'border-cyan-400',
                            'border-rose-400',
                            'border-sky-400',
                            'border-fuchsia-400',
                            'border-orange-400',
                        ];
                        
                        // Current year gets special gradient, past terms rotate through colorful gradients
                        $gradientClass = $isCurrentYear 
                            ? 'from-pcg-blue-600 via-pcg-red-600 to-purple-700' 
                            : $gradients[$index % count($gradients)];
                        
                        $borderClass = $isCurrentYear ? 'border-yellow-400' : $borderColors[$index % count($borderColors)];
                    @endphp
                    <button 
                        type="button"
                        onclick="toggleYear(this)"
                        class="w-full mb-8 flex items-center justify-between bg-gradient-to-r {{ $gradientClass }} text-white p-8 rounded-2xl hover:shadow-2xl transition-all duration-300 transform hover:scale-[1.02] border-l-8 {{ $borderClass }} relative overflow-hidden group" data-aos="fade-up">
                        <!-- Animated Background Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                        
                        <div class="flex items-center gap-6 relative z-10">
                            <div class="bg-white/20 backdrop-blur-sm p-4 rounded-lg">
                                <i class="fas fa-calendar-alt text-3xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs uppercase tracking-wider text-gray-200 mb-1 font-semibold">Leadership Term</p>
                                <h2 class="text-4xl md:text-5xl font-bold tracking-tight">{{ $year }}</h2>
                                @if($isCurrentYear)
                                    <span class="inline-flex items-center gap-2 bg-pcg-red-600 text-white px-4 py-1.5 rounded-full text-sm font-bold mt-2 shadow-lg">
                                        <i class="fas fa-star"></i> Current Term
                                    </span>
                                @else
                                    <span class="text-sm text-gray-300 mt-1 inline-block">
                                        <i class="fas fa-history mr-1"></i> Past Term
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center gap-3 relative z-10">
                            <span class="text-sm text-gray-200 hidden md:block font-semibold bg-white/10 px-3 py-1 rounded-full">
                                {{ $leaders->count() }} {{ Str::plural('Member', $leaders->count()) }}
                            </span>
                            <i class="fas fa-chevron-down text-3xl transition-transform duration-300 toggle-icon"></i>
                        </div>
                    </button>

                    <!-- Leaders Grid - Collapsible -->
                    <div class="year-content transition-all duration-300 max-h-[10000px] overflow-hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($leaders->sortBy('display_order') as $leaderIndex => $leader)
                                <div class="leadership-card bg-white p-6 text-center transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl rounded-3xl overflow-hidden border border-gray-100 hover:border-pcg-blue-200 group" 
                                     data-aos="fade-up" 
                                     data-aos-delay="{{ (($leaderIndex % 3) + 1) * 100 }}"
                                     data-name="{{ strtolower($leader->name) }}"
                                     data-title="{{ strtolower($leader->displayTitle) }}">
                                    <!-- Avatar Image -->
                                    <div class="w-full h-96 rounded-2xl overflow-hidden mx-auto mb-6 shadow-2xl border-4 border-gradient-to-r from-pcg-blue-400 to-pcg-red-400 group-hover:border-pcg-blue-300 transition-all duration-300">
                                        @if($leader->image)
                                            <img src="{{ asset('storage/' . $leader->image) }}" 
                                                 alt="{{ $leader->name }}" 
                                                 class="w-full h-full object-cover object-center">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-pcg-blue-400 to-pcg-red-500 flex items-center justify-center text-white text-7xl font-bold">
                                                {{ substr($leader->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <!-- Leadership Info -->
                                    <h3 class="text-2xl font-bold text-gray-900 mb-1 group-hover:text-pcg-blue-700 transition-colors">{{ $leader->name }}</h3>
                                    <div class="inline-block bg-gradient-to-r from-pcg-blue-600 to-pcg-red-600 text-white px-4 py-1.5 rounded-full text-sm font-bold mb-4 shadow-md">
                                        {{ $leader->displayTitle }}
                                    </div>
                                    
                                    <!-- Bio -->
                                    @if($leader->bio)
                                        <p class="text-gray-600 text-sm mb-6 leading-relaxed px-2">{{ Str::limit($leader->bio, 150) }}</p>
                                    @endif
                                    
                                    <!-- Contact Info -->
                                    <div class="space-y-3 text-sm border-t border-gray-100 pt-4">
                                        @if($leader->email)
                                            <a href="mailto:{{ $leader->email }}" class="flex items-center justify-center gap-2 text-pcg-blue-600 hover:text-pcg-blue-800 transition-colors font-medium hover:bg-pcg-blue-50 py-2 rounded-lg">
                                                <i class="fas fa-envelope"></i>
                                                <span class="truncate">{{ $leader->email }}</span>
                                            </a>
                                        @endif
                                        @if($leader->phone)
                                            <div class="flex items-center justify-center gap-2 text-gray-700 font-medium">
                                                <i class="fas fa-phone text-pcg-red-600"></i>
                                                <span>{{ $leader->phone }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="bg-gray-100 rounded-lg p-12 text-center" data-aos="fade-up">
                <i class="fas fa-{{ $filterYear ? 'search' : 'users' }} text-4xl text-gray-400 mb-4"></i>
                @if($filterYear)
                    <p class="text-gray-700 text-lg font-semibold mb-2">No leadership members found for {{ $filterYear }}</p>
                    <p class="text-gray-600 mb-4">Try selecting a different year or view all years.</p>
                    <a href="{{ route('about.leadership') }}" class="inline-block bg-pcg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-pcg-blue-700 transition">
                        <i class="fas fa-list mr-2"></i> View All Years
                    </a>
                @else
                    <p class="text-gray-600 text-lg">Leadership information will be available soon.</p>
                @endif
            </div>
        @endif
    </div>
</section>
<!-- Associate Ministers & Church Leaders Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-pcg-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Associate Ministers -->
       

        <!-- Church Leaders -->
        <div>
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="decorative-line"></div>
                <h2 class="text-4xl md:text-5xl font-bold text-pcg-blue-900 mb-4">Past Leaders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Faithful servants who have contributed to the growth and development of our congregation</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Catechists Card -->
                <div class="group" data-aos="flip-left" data-aos-duration="800">
                    <div class="bg-gradient-to-br from-pcg-blue-500 to-pcg-blue-700 rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 hover:-translate-y-3">
                        <div class="p-8 text-white">
                            <div class="flex items-center mb-6">
                                <div class="icon-circle-lg bg-white/20 backdrop-blur-lg border-2 border-white/30 mr-4 group-hover:rotate-12 transition-transform duration-500">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold">Catechists</h3>
                                    <p class="text-blue-100">Teaching the faith</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:translate-x-2">
                                    <p class="font-semibold text-lg">S.K. Saforo-Bampo</p>
                                    <p class="text-sm text-blue-100">Retired District Minister</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:translate-x-2">
                                    <p class="font-semibold text-lg">M.N. Bakae</p>
                                    <p class="text-sm text-blue-100">Ordained Minister</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:translate-x-2">
                                    <p class="font-semibold text-lg">Charles Adjei</p>
                                    <p class="text-sm text-blue-100">Ordained Minister</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:translate-x-2">
                                    <p class="font-semibold text-lg">Emmanuel Ansah Brefo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Senior Presbyters Card -->
                <div class="group" data-aos="flip-right" data-aos-duration="800">
                    <div class="bg-gradient-to-br from-pcg-red-500 to-pcg-red-700 rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 hover:-translate-y-3">
                        <div class="p-8 text-white">
                            <div class="flex items-center mb-6">
                                <div class="icon-circle-lg bg-white/20 backdrop-blur-lg border-2 border-white/30 mr-4 group-hover:rotate-12 transition-transform duration-500">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold">Senior Presbyters</h3>
                                    <p class="text-red-100">Church elders</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">L. A. Arjarquah</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">A. A. Ahia</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">S. K. Doe-Sallah</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Dr. G.K. Siaw</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Andrews Akriku</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">G.S. Otibu</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Sussie Asare</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Florence Asamoah</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold text-sm">Faustina Opoku Acheampong</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Patience D.K. Atsakpo</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                                    <p class="font-semibold">Emmanuel Osei-Akoto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Session Clerks Card -->
                <div class="group" data-aos="flip-left" data-aos-duration="800" data-aos-delay="100">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 border-2 border-pcg-blue-200 hover:-translate-y-3 hover:border-pcg-blue-400">
                        <div class="bg-gradient-to-r from-pcg-blue-600 to-pcg-blue-700 p-6">
                            <div class="flex items-center text-white">
                                <div class="icon-circle-lg bg-white/20 backdrop-blur-lg border-2 border-white/30 mr-4">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold">Session Clerks</h3>
                                    <p class="text-blue-100">Record keepers</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">G.S. Otibu</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">S.B. Frimpong</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Margaret Okoh</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Daniel O. Mintah</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Johanna H. Fleischer</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Juliana Asamoah</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Rosina E. Agyekum</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Elizabeth M. Bruce</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-blue-50 to-pcg-blue-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-blue-900">Lydia Donkor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Congregational Treasurers Card -->
                <div class="group" data-aos="flip-right" data-aos-duration="800" data-aos-delay="100">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 border-2 border-pcg-red-200 hover:-translate-y-3 hover:border-pcg-red-400">
                        <div class="bg-gradient-to-r from-pcg-red-600 to-pcg-red-700 p-6">
                            <div class="flex items-center text-white">
                                <div class="icon-circle-lg bg-white/20 backdrop-blur-lg border-2 border-white/30 mr-4">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold">Treasurers</h3>
                                    <p class="text-red-100">Financial stewards</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">S.O. Dosoo</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">J.O. Dorgbey</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">L.V. Ayeh</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">Emmanuel K. Tetteh</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">Michael Tetteh Madjah</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">Felix Obeng Misa</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">Seth Ohene Manteaw</p>
                                </div>
                                <div class="bg-gradient-to-br from-pcg-red-50 to-pcg-red-100 rounded-lg p-3 hover:shadow-md transition duration-300">
                                    <p class="font-semibold text-pcg-red-900">Mina Owusu Adebi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leadership Quote -->
<section class="relative py-20 overflow-hidden" data-aos="fade-up">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1920&h=600&fit=crop" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-pcg-blue-900/95 via-pcg-blue-800/90 to-pcg-red-900/95"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <blockquote class="text-2xl md:text-3xl font-light italic mb-6 text-white">
            "Be shepherds of God's flock that is under your care, watching over them—not because you must, 
            but because you are willing, as God wants you to be."
        </blockquote>
        <p class="text-xl text-gray-200">1 Peter 5:2</p>
    </div>
</section>

<script>
    function toggleYear(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.toggle-icon');
        
        content.classList.toggle('max-h-[10000px]');
        content.classList.toggle('max-h-0');
        icon.classList.toggle('rotate-180');
    }

    // Search functionality
    const searchInput = document.getElementById('leadershipSearch');
    const searchResultCount = document.getElementById('searchResultCount');
    const resultCountSpan = document.getElementById('resultCount');
    
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            const leadershipCards = document.querySelectorAll('.leadership-card');
            let visibleCount = 0;
            
            if (searchTerm === '') {
                // Show all cards
                leadershipCards.forEach(card => {
                    card.style.display = '';
                });
                searchResultCount.classList.add('hidden');
                return;
            }
            
            // Filter cards
            leadershipCards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const title = card.getAttribute('data-title') || '';
                
                if (name.includes(searchTerm) || title.includes(searchTerm)) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Update result count
            resultCountSpan.textContent = visibleCount;
            searchResultCount.classList.remove('hidden');
            
            // Auto-expand all year sections when searching
            if (searchTerm !== '') {
                const buttons = document.querySelectorAll('button[onclick="toggleYear(this)"]');
                buttons.forEach(button => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.toggle-icon');
                    
                    if (content.classList.contains('max-h-0')) {
                        content.classList.remove('max-h-0');
                        icon.classList.add('rotate-180');
                    }
                });
            }
        });
    }

    // Auto-expand/collapse years on page load
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('button[onclick="toggleYear(this)"]');
        
        // Check if any year is marked as current
        const hasCurrentYear = Array.from(buttons).some(button => 
            button.textContent.includes('Current Term')
        );
        
        // If no current year exists, expand all years
        if (!hasCurrentYear) {
            buttons.forEach(button => {
                button.querySelector('.toggle-icon').classList.add('rotate-180');
            });
            return;
        }
        
        // If there's a current year, expand it and collapse others
        buttons.forEach(button => {
            if (button.textContent.includes('Current Term')) {
                button.querySelector('.toggle-icon').classList.add('rotate-180');
            } else {
                button.nextElementSibling.classList.add('max-h-0');
            }
        });
    });
</script>

<style>
    .year-content {
        max-height: 10000px;
        overflow: hidden;
    }
    
    .year-content.max-h-0 {
        max-height: 0;
        opacity: 0;
    }
    
    .toggle-icon {
        transition: transform 0.3s ease;
    }
    
    .toggle-icon.rotate-180 {
        transform: rotate(180deg);
    }

    .text-shadow-lg {
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .animate-expand {
        animation: expandWidth 0.8s ease-in-out;
    }

    @keyframes expandWidth {
        from {
            width: 0;
        }
        to {
            width: 96px;
        }
    }

    .animate-bounce-slow {
        animation: bounceSlow 3s ease-in-out infinite;
    }

    @keyframes bounceSlow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .icon-circle-lg {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }
</style>
@endsection
