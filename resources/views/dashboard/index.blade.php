@extends('dashboard.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Home')

@section('content')
<div class="space-y-6">
    <!-- Premium Welcome Header -->
    <div class="relative overflow-hidden bg-gradient-to-br from-orange-600 via-orange-500 to-red-500 rounded-3xl shadow-2xl transform hover:scale-[1.01] transition-transform duration-500">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        
        <!-- Decorative Elements with Animation -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -mr-48 -mt-48 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full -ml-32 -mb-32 animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="relative px-8 py-10">
            <div class="flex items-center justify-between flex-wrap gap-6">
                <div class="space-y-2">
                    <div class="flex items-center gap-3">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center border border-white/30">
                            <i class="fas fa-laptop-code text-white text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-4xl font-bold text-white tracking-tight">
                                Welcome back, {{ auth()->user()->name }}
                            </h1>
                            <p class="text-white/80 text-lg mt-1">
                                <i class="fas fa-shield-check mr-2"></i>{{ ucfirst(auth()->user()->role) }} Access
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-4">
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl px-6 py-4 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                        <p class="text-white/70 text-sm font-medium mb-1"><i class="fas fa-calendar-day mr-2"></i>Today</p>
                        <p class="text-white text-xl font-bold">{{ now()->format('M d, Y') }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl px-6 py-4 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                        <p class="text-white/70 text-sm font-medium mb-1"><i class="fas fa-clock mr-2"></i>Time</p>
                        <p class="text-white text-xl font-bold" id="current-time">{{ now()->format('h:i A') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Grid -->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <!-- Left Section - IT Services Management -->
        <div class="xl:col-span-9 space-y-6">
            <!-- IT Services & Products -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- IT Services -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="bg-gradient-to-r from-orange-50 to-red-50 px-6 py-5 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg animate-pulse" style="animation-duration: 2s;">
                                    <i class="fas fa-cogs text-white"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold text-gray-900">IT Services</h2>
                                    <p class="text-xs text-gray-600">Manage service offerings</p>
                                </div>
                            </div>
                            <div class="px-3 py-1 bg-orange-100 rounded-full">
                                <span class="text-xs font-bold text-orange-600">{{ $stats['services'] }} Total</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-3">
                            <!-- Total Services -->
                            <a href="{{ route('dashboard.services.index') }}" class="group relative bg-gradient-to-br from-orange-50 to-orange-100/50 rounded-xl p-4 border-2 border-orange-200/50 hover:border-orange-400 hover:shadow-lg transition-all duration-300">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-laptop-code text-orange-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-orange-600 uppercase tracking-wide">Services</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['services'] }}</p>
                                    <p class="text-xs text-orange-600 font-medium">View all</p>
                                </div>
                            </a>

                            <!-- Active Services -->
                            <div class="relative bg-gradient-to-br from-green-50 to-green-100/50 rounded-xl p-4 border-2 border-green-200/50">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-check-circle text-green-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-green-600 uppercase tracking-wide">Active</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['active_services'] }}</p>
                                    <p class="text-xs text-green-600 font-medium">Live now</p>
                                </div>
                            </div>

                            <!-- Products -->
                            <a href="{{ route('dashboard.products.index') }}" class="group relative bg-gradient-to-br from-blue-50 to-blue-100/50 rounded-xl p-4 border-2 border-blue-200/50 hover:border-blue-400 hover:shadow-lg transition-all duration-300">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-box text-blue-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-blue-600 uppercase tracking-wide">Products</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['products'] }}</p>
                                    <p class="text-xs text-blue-600 font-medium">Manage</p>
                                </div>
                            </a>

                            <!-- Active Products -->
                            <div class="relative bg-gradient-to-br from-purple-50 to-purple-100/50 rounded-xl p-4 border-2 border-purple-200/50">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-purple-500/10 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-star text-purple-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Active</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['active_products'] }}</p>
                                    <p class="text-xs text-purple-600 font-medium">Featured</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Clients & Projects -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 px-6 py-5 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg animate-pulse" style="animation-duration: 2s; animation-delay: 0.5s;">
                                    <i class="fas fa-briefcase text-white"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold text-gray-900">Portfolio</h2>
                                    <p class="text-xs text-gray-600">Clients & projects</p>
                                </div>
                            </div>
                            <div class="px-3 py-1 bg-indigo-100 rounded-full">
                                <span class="text-xs font-bold text-indigo-600">{{ $stats['clients'] + $stats['projects'] }} Total</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-3">
                            <!-- Clients -->
                            <a href="{{ route('dashboard.clients.index') }}" class="group relative bg-gradient-to-br from-indigo-50 to-indigo-100/50 rounded-xl p-4 border-2 border-indigo-200/50 hover:border-indigo-400 hover:shadow-lg transition-all duration-300">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-indigo-500/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-building text-indigo-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Clients</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['clients'] }}</p>
                                    <p class="text-xs text-indigo-600 font-medium">Manage</p>
                                </div>
                            </a>

                            <!-- Active Clients -->
                            <div class="relative bg-gradient-to-br from-teal-50 to-teal-100/50 rounded-xl p-4 border-2 border-teal-200/50">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-teal-500/10 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-check text-teal-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-teal-600 uppercase tracking-wide">Active</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['active_clients'] }}</p>
                                    <p class="text-xs text-teal-600 font-medium">Visible</p>
                                </div>
                            </div>

                            <!-- Projects -->
                            <a href="{{ route('dashboard.projects.index') }}" class="group relative bg-gradient-to-br from-purple-50 to-purple-100/50 rounded-xl p-4 border-2 border-purple-200/50 hover:border-purple-400 hover:shadow-lg transition-all duration-300">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-purple-500/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-project-diagram text-purple-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Projects</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['projects'] }}</p>
                                    <p class="text-xs text-purple-600 font-medium">Portfolio</p>
                                </div>
                            </a>

                            <!-- Testimonials -->
                            <a href="{{ route('dashboard.testimonials.index') }}" class="group relative bg-gradient-to-br from-yellow-50 to-yellow-100/50 rounded-xl p-4 border-2 border-yellow-200/50 hover:border-yellow-400 hover:shadow-lg transition-all duration-300">
                                <div class="absolute top-2 right-2 w-10 h-10 bg-yellow-500/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-quote-right text-yellow-600 text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-yellow-600 uppercase tracking-wide">Reviews</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $stats['testimonials'] }}</p>
                                    <p class="text-xs text-yellow-600 font-medium">Manage</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Management -->
            @if(auth()->user()->isAdmin())
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="bg-gradient-to-r from-gray-50 to-slate-50 px-6 py-5 border-b border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-cog text-white animate-spin" style="animation-duration: 3s;"></i>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-gray-900">System Administration</h2>
                                <p class="text-xs text-gray-600">Manage users & settings</p>
                            </div>
                        </div>
                        <div class="px-3 py-1 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full">
                            <span class="text-xs font-bold text-white">ADMIN</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('dashboard.users.index') }}" class="group relative bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-xl p-6 border-2 border-gray-200/50 hover:border-gray-400 hover:shadow-lg transition-all duration-300 flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Active Users</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $stats['active_users'] }}</p>
                                <p class="text-xs text-gray-600 font-medium">Manage users</p>
                            </div>
                            <div class="w-16 h-16 bg-gray-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-users text-gray-600 text-2xl"></i>
                            </div>
                        </a>

                        <a href="{{ route('dashboard.settings.index') }}" class="group relative bg-gradient-to-br from-orange-50 to-orange-100/50 rounded-xl p-6 border-2 border-orange-200/50 hover:border-orange-400 hover:shadow-lg transition-all duration-300 flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-orange-600 uppercase tracking-wide">Settings</p>
                                <p class="text-3xl font-bold text-gray-900"><i class="fas fa-sliders-h"></i></p>
                                <p class="text-xs text-orange-600 font-medium">Company info</p>
                            </div>
                            <div class="w-16 h-16 bg-orange-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-cog text-orange-600 text-2xl"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Right Section - Quick Actions -->
        <div class="xl:col-span-3 space-y-6">
            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden sticky top-6">
                <div class="bg-gradient-to-r from-orange-50 to-red-50 px-6 py-5 border-b border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-bolt text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Quick Actions</h3>
                            <p class="text-sm text-gray-600">Create new content</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 space-y-3">
                    <a href="{{ route('dashboard.services.create') }}" class="group flex items-center gap-4 p-4 bg-gradient-to-r from-orange-50 to-orange-100/30 rounded-xl border-2 border-orange-200/50 hover:border-orange-400 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900">New Service</p>
                            <p class="text-xs text-gray-600">Add IT service</p>
                        </div>
                        <i class="fas fa-chevron-right text-orange-600 group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    <a href="{{ route('dashboard.products.create') }}" class="group flex items-center gap-4 p-4 bg-gradient-to-r from-blue-50 to-blue-100/30 rounded-xl border-2 border-blue-200/50 hover:border-blue-400 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900">New Product</p>
                            <p class="text-xs text-gray-600">Add software</p>
                        </div>
                        <i class="fas fa-chevron-right text-blue-600 group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    <a href="{{ route('dashboard.clients.create') }}" class="group flex items-center gap-4 p-4 bg-gradient-to-r from-indigo-50 to-indigo-100/30 rounded-xl border-2 border-indigo-200/50 hover:border-indigo-400 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-indigo-500 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900">New Client</p>
                            <p class="text-xs text-gray-600">Add partner</p>
                        </div>
                        <i class="fas fa-chevron-right text-indigo-600 group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    <a href="{{ route('dashboard.testimonials.create') }}" class="group flex items-center gap-4 p-4 bg-gradient-to-r from-yellow-50 to-yellow-100/30 rounded-xl border-2 border-yellow-200/50 hover:border-yellow-400 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900">New Testimonial</p>
                            <p class="text-xs text-gray-600">Add review</p>
                        </div>
                        <i class="fas fa-chevron-right text-yellow-600 group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    @if(auth()->user()->isAdmin())
                    <a href="{{ route('dashboard.users.create') }}" class="group flex items-center gap-4 p-4 bg-gradient-to-r from-gray-50 to-gray-100/30 rounded-xl border-2 border-gray-200/50 hover:border-gray-400 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-gray-600 rounded-xl flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900">New User</p>
                            <p class="text-xs text-gray-600">Add admin</p>
                        </div>
                        <i class="fas fa-chevron-right text-gray-600 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Help Card -->
            <div class="bg-gradient-to-br from-orange-600 via-red-600 to-pink-600 rounded-2xl shadow-xl p-6 text-white hover:shadow-2xl transition-all duration-300 transform hover:scale-105 relative overflow-hidden">
                <div class="absolute inset-0 bg-white/5 animate-pulse" style="animation-duration: 3s;"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-white/20 backdrop-blur-xl rounded-xl flex items-center justify-center border border-white/30 animate-bounce" style="animation-duration: 2s;">
                            <i class="fas fa-info-circle text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold">HiCliQs Dashboard</h3>
                    </div>
                    <p class="text-white/90 text-sm leading-relaxed mb-4">
                        Manage your IT company's services, products, clients and testimonials all in one place.
                    </p>
                    <div class="bg-white/10 backdrop-blur-xl rounded-xl p-4 border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <p class="text-white/70 text-xs font-medium mb-1"><i class="fas fa-user-shield mr-2"></i>Your Role</p>
                        <p class="text-white text-lg font-bold">{{ ucfirst(auth()->user()->role) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Live Clock Update
    function updateTime() {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const ampm = hours >= 12 ? 'PM' : 'AM';
        const displayHours = hours % 12 || 12;
        const displayMinutes = minutes < 10 ? '0' + minutes : minutes;
        
        const timeElement = document.getElementById('current-time');
        if (timeElement) {
            timeElement.textContent = displayHours + ':' + displayMinutes + ' ' + ampm;
        }
    }
    
    // Update time every second
    setInterval(updateTime, 1000);
    updateTime(); // Initial call
</script>
@endpush

@endsection
