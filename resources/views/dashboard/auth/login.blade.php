<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - HiCliQs Ghana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1a1d21 0%, #2d3436 50%, #1a1d21 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .brand-hi { color: #F26522; }
        .brand-cliqs { color: #ffffff; }
        .orange-gradient {
            background: linear-gradient(135deg, #F26522 0%, #ff7f45 100%);
        }
        .floating-icon {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Floating Background Icons -->
    <div class="absolute top-10 left-10 text-orange-500 opacity-10 floating-icon" style="animation-delay: 0s;">
        <i class="fas fa-laptop-code text-6xl"></i>
    </div>
    <div class="absolute bottom-20 right-20 text-orange-500 opacity-10 floating-icon" style="animation-delay: 2s;">
        <i class="fas fa-network-wired text-5xl"></i>
    </div>
    <div class="absolute top-1/3 right-10 text-orange-500 opacity-10 floating-icon" style="animation-delay: 4s;">
        <i class="fas fa-database text-4xl"></i>
    </div>

    <div class="w-full max-w-md relative z-10">
        <!-- Login Card -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-200">
            <!-- Header -->
            <div class="orange-gradient p-8 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 opacity-20">
                    <i class="fas fa-code text-9xl"></i>
                </div>
                <div class="text-center relative z-10">
                    <div class="mb-4">
                        <i class="fas fa-laptop-code text-5xl"></i>
                    </div>
                    <h1 class="text-4xl font-bold mb-1">
                        <span class="brand-hi">Hi</span><span class="brand-cliqs">CliQs</span>
                    </h1>
                    <p class="text-orange-100 mt-2 font-medium">IT Solutions Dashboard</p>
                    <p class="text-orange-200 text-sm mt-1">Empowering Ghana with Digital Innovation</p>
                </div>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form method="POST" action="{{ route('dashboard.login.post') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2" style="color: #F26522;"></i> Email Address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent transition @error('email') border-red-500 @enderror"
                            style="focus:ring-color: #F26522;"
                            placeholder="admin@hicliqs.com"
                        >
                        @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2" style="color: #F26522;"></i> Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent transition @error('password') border-red-500 @enderror"
                            placeholder="Enter your password"
                        >
                        @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-6 flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="h-4 w-4 border-gray-300 rounded cursor-pointer"
                            style="color: #F26522;"
                        >
                        <label for="remember" class="ml-2 block text-sm text-gray-700 cursor-pointer">
                            Remember me on this device
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full orange-gradient text-white font-bold py-3 rounded-lg hover:shadow-lg transition duration-200 flex items-center justify-center gap-2 transform hover:scale-105"
                    >
                        <i class="fas fa-sign-in-alt"></i> Login to Dashboard
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gradient-to-r from-gray-50 to-orange-50 px-8 py-6 text-center text-gray-600 text-sm border-t border-gray-200">
                <p class="flex items-center justify-center gap-2">
                    <i class="fas fa-shield-alt" style="color: #F26522;"></i>
                    <span>Secure login - Your credentials are encrypted</span>
                </p>
                <p class="mt-2 text-xs text-gray-500">
                    Default: <strong>admin@hicliqs.com</strong> / <strong>password123</strong>
                </p>
            </div>
        </div>

        <!-- Back Link -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-white hover:text-orange-300 transition flex items-center justify-center gap-2">
                <i class="fas fa-arrow-left"></i> Back to Website
            </a>
        </div>

        <!-- Info Box -->
        <div class="mt-4 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg p-4 text-white text-sm">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-orange-400 mt-1"></i>
                <div>
                    <p class="font-semibold mb-1">First Time Login?</p>
                    <p class="text-gray-300 text-xs">Use the credentials shown above to access the dashboard. You can change your password after logging in.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
