<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HiCliQs Dashboard</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/loader.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/loader.png') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}?v={{ time() }}">
    
    <!-- Additional inline styles -->
    <style>
        /* Reset and base styles */
        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        body { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background-color: #f3f4f6; line-height: 1.5; }
        
        /* Layout */
        .dashboard-container { display: flex; height: 100vh; }
        .sidebar { width: 256px; background: linear-gradient(to bottom, #1a1d21, #2d3436); color: white; overflow-y: auto; position: relative; min-height: 100vh; box-shadow: 2px 0 10px rgba(0,0,0,0.1); }
        .sidebar-header { padding: 1.5rem; border-bottom: 2px solid #F26522; background: linear-gradient(135deg, #1a1d21 0%, #2d3436 100%); }
        .sidebar-title { font-size: 1.5rem; font-weight: bold; display: flex; align-items: center; gap: 0.75rem; }
        .sidebar-subtitle { color: #ff9966; font-size: 0.875rem; margin-top: 0.5rem; }
        .sidebar-nav { padding: 1rem; padding-bottom: 100px; }
        .sidebar-section-title { color: #F26522; font-size: 0.75rem; text-transform: uppercase; font-weight: bold; padding: 0 1rem; margin-bottom: 0.75rem; margin-top: 1.5rem; letter-spacing: 0.05em; }
        .sidebar-link { display: block; padding: 0.75rem 1rem; border-radius: 0.5rem; margin-bottom: 0.5rem; transition: all 0.2s; color: white; text-decoration: none; }
        .sidebar-link:hover { background-color: rgba(242, 101, 34, 0.1); border-left: 3px solid #F26522; padding-left: calc(1rem - 3px); }
        .sidebar-link.active { background: linear-gradient(90deg, rgba(242, 101, 34, 0.2) 0%, rgba(242, 101, 34, 0.05) 100%); border-left: 3px solid #F26522; padding-left: calc(1rem - 3px); }
        .sidebar-logout { position: absolute; bottom: 0; width: 100%; padding: 1rem; border-top: 2px solid #F26522; background: #1a1d21; }
        
        .main-content { flex: 1; overflow-y: auto; background: #f3f4f6; }
        .header { background: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 1.5rem; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 40; }
        .header-title { font-size: 1.5rem; font-weight: bold; color: #1f2937; }
        .header-user { display: flex; align-items: center; gap: 1.5rem; }
        .user-info { text-align: right; }
        .user-welcome { font-size: 0.875rem; color: #6b7280; }
        .user-name { font-weight: 600; color: #111827; }
        .user-avatar { width: 48px; height: 48px; background: linear-gradient(135deg, #F26522, #ff7f45); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.25rem; box-shadow: 0 4px 6px rgba(242, 101, 34, 0.3); }
        
        .content-area { padding: 2rem; max-width: 1400px; }
        
        /* Grid System */
        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        
        @media (min-width: 768px) {
            .md\\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        }
        @media (min-width: 1024px) {
            .lg\\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .lg\\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .lg\\:col-span-2 { grid-column: span 2 / span 2; }
        }
        
        /* Cards */
        .bg-white { background-color: white; }
        .rounded-lg { border-radius: 0.5rem; }
        .shadow-md { box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); }
        .border-l-4 { border-left-width: 4px; border-left-style: solid; }
        .border-blue-600 { border-left-color: #2563eb; }
        .border-purple-600 { border-left-color: #9333ea; }
        .border-green-600 { border-left-color: #16a34a; }
        .border-red-600 { border-left-color: #dc2626; }
        .border-yellow-600 { border-left-color: #ca8a04; }
        .border-indigo-600 { border-left-color: #4f46e5; }
        .border-pink-600 { border-left-color: #db2777; }
        .border-cyan-600 { border-left-color: #0891b2; }
        
        /* Padding */
        .p-3 { padding: 0.75rem; }
        .p-4 { padding: 1rem; }
        .p-6 { padding: 1.5rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        
        /* Margin */
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        
        /* Text */
        .text-sm { font-size: 0.875rem; }
        .text-xs { font-size: 0.75rem; }
        .text-xl { font-size: 1.25rem; }
        .text-2xl { font-size: 1.5rem; }
        .text-3xl { font-size: 1.875rem; }
        .text-4xl { font-size: 2.25rem; }
        .font-semibold { font-weight: 600; }
        .font-bold { font-weight: 700; }
        .font-medium { font-weight: 500; }
        .uppercase { text-transform: uppercase; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        
        /* Colors */
        .text-gray-600 { color: #4b5563; }
        .text-gray-700 { color: #374151; }
        .text-gray-800 { color: #1f2937; }
        .text-gray-900 { color: #111827; }
        .text-blue-100 { color: #dbeafe; }
        .text-blue-200 { color: #bfdbfe; }
        .text-blue-300 { color: #93c5fd; }
        .text-blue-600 { color: #2563eb; }
        .text-purple-600 { color: #9333ea; }
        .text-green-600 { color: #16a34a; }
        .text-red-600 { color: #dc2626; }
        .text-yellow-600 { color: #ca8a04; }
        .text-indigo-600 { color: #4f46e5; }
        .text-pink-600 { color: #db2777; }
        .text-cyan-600 { color: #0891b2; }
        .text-white { color: white; }
        
        /* Backgrounds */
        .bg-blue-50 { background-color: #eff6ff; }
        .bg-blue-500 { background-color: #3b82f6; }
        .bg-blue-600 { background-color: #2563eb; }
        .bg-blue-800 { background-color: #1e40af; }
        .bg-purple-50 { background-color: #faf5ff; }
        .bg-green-50 { background-color: #f0fdf4; }
        .bg-red-50 { background-color: #fef2f2; }
        .bg-red-600 { background-color: #dc2626; }
        .bg-red-700 { background-color: #b91c1c; }
        .bg-yellow-50 { background-color: #fefce8; }
        .bg-cyan-50 { background-color: #ecfeff; }
        .bg-gray-100 { background-color: #f3f4f6; }
        .bg-opacity-50 { opacity: 0.5; }
        
        /* Borders */
        .border { border-width: 1px; border-style: solid; }
        .border-gray-200 { border-color: #e5e7eb; }
        .border-blue-200 { border-color: #bfdbfe; }
        .border-blue-500 { border-color: #3b82f6; }
        .border-blue-700 { border-color: #1d4ed8; }
        .border-green-200 { border-color: #bbf7d0; }
        .border-red-200 { border-color: #fecaca; }
        .border-purple-500 { border-color: #a855f7; }
        .border-yellow-500 { border-color: #eab308; }
        .border-cyan-500 { border-color: #06b6d4; }
        .border-b { border-bottom-width: 1px; border-bottom-style: solid; }
        .border-t { border-top-width: 1px; border-top-style: solid; }
        
        /* Flexbox */
        .flex { display: flex; }
        .flex-1 { flex: 1 1 0%; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .gap-2 { gap: 0.5rem; }
        .gap-3 { gap: 0.75rem; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        
        /* Display */
        .block { display: block; }
        .inline-block { display: inline-block; }
        .hidden { display: none; }
        
        /* Position */
        .sticky { position: sticky; }
        .absolute { position: absolute; }
        .relative { position: relative; }
        .top-0 { top: 0; }
        .bottom-0 { bottom: 0; }
        .z-40 { z-index: 40; }
        
        /* Sizing */
        .w-12 { width: 3rem; }
        .w-64 { width: 16rem; }
        .w-full { width: 100%; }
        .h-12 { height: 3rem; }
        .h-screen { height: 100vh; }
        
        /* Opacity */
        .opacity-20 { opacity: 0.2; }
        
        /* Transitions */
        .transition { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        
        /* Hover states */
        .hover\\:bg-blue-50:hover { background-color: #eff6ff; }
        .hover\\:bg-blue-700:hover { background-color: #1d4ed8; }
        .hover\\:bg-red-700:hover { background-color: #b91c1c; }
        .hover\\:bg-purple-50:hover { background-color: #faf5ff; }
        .hover\\:bg-green-50:hover { background-color: #f0fdf4; }
        .hover\\:bg-yellow-50:hover { background-color: #fefce8; }
        .hover\\:bg-cyan-50:hover { background-color: #ecfeff; }
        .hover\\:border-blue-500:hover { border-color: #3b82f6; }
        .hover\\:border-purple-500:hover { border-color: #a855f7; }
        .hover\\:border-green-500:hover { border-color: #22c55e; }
        .hover\\:border-red-500:hover { border-color: #ef4444; }
        .hover\\:border-yellow-500:hover { border-color: #eab308; }
        .hover\\:border-cyan-500:hover { border-color: #06b6d4; }
        .hover\\:underline:hover { text-decoration: underline; }
        
        /* Overflow */
        .overflow-y-auto { overflow-y: auto; }
        
        /* Gradient backgrounds */
        .bg-gradient-to-b { background-image: linear-gradient(to bottom, var(--tw-gradient-stops)); }
        .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
        .from-blue-400 { --tw-gradient-from: #60a5fa; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(96, 165, 250, 0)); }
        .from-blue-600 { --tw-gradient-from: #2563eb; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(37, 99, 235, 0)); }
        .from-blue-800 { --tw-gradient-from: #1e40af; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(30, 64, 175, 0)); }
        .to-blue-600 { --tw-gradient-to: #2563eb; }
        .to-blue-800 { --tw-gradient-to: #1e40af; }
        .to-blue-900 { --tw-gradient-to: #1e3a8a; }
        
        /* Rounded corners */
        .rounded { border-radius: 0.25rem; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-full { border-radius: 9999px; }
        
        /* Shadow */
        .shadow-lg { box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05); }
    </style>
</head>
<body class="bg-gray-100">
    <div class="dashboard-container flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar w-64 bg-gradient-to-b from-blue-800 to-blue-900 text-white shadow-lg overflow-y-auto">
            <div class="sidebar-header p-6 border-b-2" style="border-color: #F26522;">
                <h1 class="sidebar-title text-2xl font-bold flex items-center gap-3">
                    <i class="fas fa-laptop-code" style="color: #F26522;"></i> 
                    <span><span style="color: #F26522;">Hi</span><span style="color: #ffffff;">CliQs</span></span>
                </h1>
                <p class="sidebar-subtitle text-sm mt-2" style="color: #ff9966;">IT Solutions Dashboard</p>
            </div>

            <nav class="sidebar-nav p-4">
                <!-- Dashboard -->
                <a href="{{ route('dashboard.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 hover:bg-blue-700 transition {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                    <i class="fas fa-chart-line mr-3"></i> Dashboard
                </a>

                <!-- IT Services Section -->
                <div class="mt-6">
                    <p class="sidebar-section-title" style="color: #F26522;">IT Services</p>
                    
                    <a href="{{ route('dashboard.services.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.services.*') ? 'active' : '' }}">
                        <i class="fas fa-cogs mr-3" style="color: #F26522;"></i> Services
                    </a>

                    <a href="{{ route('dashboard.products.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.products.*') ? 'active' : '' }}">
                        <i class="fas fa-box mr-3" style="color: #F26522;"></i> Products
                    </a>
                </div>

                <!-- Portfolio Section -->
                <div class="mt-6">
                    <p class="sidebar-section-title" style="color: #F26522;">Portfolio</p>
                    
                    <a href="{{ route('dashboard.clients.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.clients.*') ? 'active' : '' }}">
                        <i class="fas fa-building mr-3" style="color: #F26522;"></i> Clients
                    </a>

                    <a href="{{ route('dashboard.projects.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.projects.*') ? 'active' : '' }}">
                        <i class="fas fa-project-diagram mr-3" style="color: #F26522;"></i> Projects
                    </a>

                    <a href="{{ route('dashboard.testimonials.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.testimonials.*') ? 'active' : '' }}">
                        <i class="fas fa-quote-right mr-3" style="color: #F26522;"></i> Testimonials
                    </a>
                </div>

                <!-- Company Settings -->
                @if(auth()->user()->isAdmin())
                <div class="mt-6">
                    <p class="sidebar-section-title" style="color: #F26522;">Company</p>
                    
                    <a href="{{ route('dashboard.settings.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.settings.*') ? 'active' : '' }}">
                        <i class="fas fa-sliders-h mr-3" style="color: #F26522;"></i> Settings
                    </a>
                </div>
                @endif

             

                <!-- Admin Section -->
                @if(auth()->user()->isAdmin())
                <div class="mt-6">
                    <p class="sidebar-section-title" style="color: #F26522;">Administration</p>
                    
                    <a href="{{ route('dashboard.users.index') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.users.*') ? 'active' : '' }}">
                        <i class="fas fa-users-cog mr-3" style="color: #F26522;"></i> Users
                    </a>
                </div>
                @endif

                <!-- Settings Section -->
                <div class="mt-6">
                    <p class="sidebar-section-title" style="color: #F26522;">Account</p>
                    
                    <a href="{{ route('dashboard.profile') }}" class="sidebar-link block px-4 py-3 rounded-lg mb-2 transition {{ request()->routeIs('dashboard.profile') ? 'active' : '' }}">
                        <i class="fas fa-user-circle mr-3" style="color: #F26522;"></i> Profile
                    </a>
                </div>
            </nav>

            <!-- Logout Button -->
            <div class="absolute bottom-0 w-full p-4 border-t-2" style="border-color: #F26522; background: #1a1d21;">
                <form method="POST" action="{{ route('dashboard.logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full px-4 py-3 rounded-lg transition text-white font-medium" style="background: linear-gradient(135deg, #dc2626, #b91c1c); box-shadow: 0 4px 6px rgba(220, 38, 38, 0.3);" onmouseover="this.style.background='linear-gradient(135deg, #b91c1c, #991b1b)'" onmouseout="this.style.background='linear-gradient(135deg, #dc2626, #b91c1c)'">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content flex-1 overflow-y-auto">
            <!-- Top Navigation -->
            <header class="header bg-white shadow-md p-6 flex justify-between items-center sticky top-0 z-40" style="border-bottom: 3px solid #F26522;">
                <div>
                    <h2 class="header-title text-2xl font-bold" style="color: #1a1d21;">@yield('page-title', 'Dashboard')</h2>
                    <p class="text-xs mt-1" style="color: #F26522;"><i class="fas fa-circle text-xs" style="color: #22c55e;"></i> System Online</p>
                </div>
                <div class="header-user flex items-center gap-6">
                    <div class="user-info text-right">
                        <p class="user-welcome text-sm" style="color: #6b7280;">Welcome back</p>
                        <p class="user-name font-semibold" style="color: #1a1d21;">{{ auth()->user()->name }}</p>
                        <p class="text-xs" style="color: #F26522;">{{ ucfirst(auth()->user()->role) }}</p>
                    </div>
                    <div class="user-avatar w-12 h-12 rounded-full flex items-center justify-center text-white font-bold" style="background: linear-gradient(135deg, #F26522, #ff7f45); box-shadow: 0 4px 6px rgba(242, 101, 34, 0.3);">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <section class="content-area p-8">
                <!-- Alerts -->
                @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <strong>Errors occurred:</strong>
                    <ul class="mt-2 ml-4 list-disc">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session()->has('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 flex items-center justify-between">
                    <div>
                        <i class="fas fa-check-circle mr-2"></i>
                        <strong>{{ session('success') }}</strong>
                    </div>
                    <button onclick="this.parentElement.style.display='none'" class="text-green-700 hover:text-green-900">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 flex items-center justify-between">
                    <div>
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <strong>{{ session('error') }}</strong>
                    </div>
                    <button onclick="this.parentElement.style.display='none'" class="text-red-700 hover:text-red-900">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @endif

                @yield('content')
            </section>
        </main>
    </div>

    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('[data-alert]');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000);
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
