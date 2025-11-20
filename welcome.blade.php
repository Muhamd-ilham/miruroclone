@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="relative min-h-screen bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <i class="fas fa-play-circle text-2xl text-red-500"></i>
            </div>
        </div>

        <div class="mt-16">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Welcome to {{ config('app.name') }}
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Your ultimate destination for anime streaming
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <a href="{{ route('home') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-primary-50 dark:bg-primary-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-home text-2xl text-primary-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Browse Anime</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Discover thousands of anime series and movies. From the latest releases to classic favorites, find your next binge-watch here.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400">
                        <span class="text-sm font-medium">Start watching</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>

                <a href="{{ route('search') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-green-50 dark:bg-green-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-search text-2xl text-green-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Search & Filter</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Use our advanced search and filtering options to find exactly what you're looking for by genre, year, rating, and more.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-green-600 dark:text-green-400">
                        <span class="text-sm font-medium">Explore now</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>

                @guest
                <a href="{{ route('register') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-user-plus text-2xl text-blue-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Create Account</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Join our community to track your favorite anime, create watchlists, rate episodes, and get personalized recommendations.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-blue-600 dark:text-blue-400">
                        <span class="text-sm font-medium">Sign up free</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>

                <a href="{{ route('login') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-purple-50 dark:bg-purple-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-sign-in-alt text-2xl text-purple-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sign In</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Already have an account? Sign in to continue your anime journey and access your personal dashboard and watchlists.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-purple-600 dark:text-purple-400">
                        <span class="text-sm font-medium">Sign in</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>
                @else
                <a href="{{ route('user.dashboard') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-tachometer-alt text-2xl text-blue-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">My Dashboard</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Welcome back, {{ auth()->user()->name }}! Access your dashboard to see your watchlist, favorites, and continue watching.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-blue-600 dark:text-blue-400">
                        <span class="text-sm font-medium">Go to dashboard</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>

                <a href="{{ route('user.favorites') }}" class="scale-100 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline focus:outline-2 focus:outline-primary-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <i class="fas fa-heart text-2xl text-red-500"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">My Favorites</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            View and manage your favorite anime series. Keep track of the shows you love most and never lose sight of them.
                        </p>
                    </div>

                    <div class="mt-4 flex items-center text-red-600 dark:text-red-400">
                        <span class="text-sm font-medium">View favorites</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>
                @endguest
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-16 border-t border-gray-200 dark:border-gray-700 pt-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Why Choose {{ config('app.name') }}?
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    The best anime streaming experience with powerful features
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="h-16 w-16 bg-green-50 dark:bg-green-800/20 flex items-center justify-center rounded-full mx-auto mb-4">
                        <i class="fas fa-play text-2xl text-green-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">High Quality Streaming</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Enjoy your favorite anime in crystal clear quality with fast loading times and reliable streaming.
                    </p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full mx-auto mb-4">
                        <i class="fas fa-bookmark text-2xl text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Personal Watchlists</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Create and manage your personal watchlists, track your progress, and never lose your place.
                    </p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-purple-50 dark:bg-purple-800/20 flex items-center justify-center rounded-full mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-purple-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Community Features</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Rate, review, and discuss episodes with fellow anime fans in our vibrant community.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between border-t border-gray-200 dark:border-gray-700 pt-8">
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                <div class="flex items-center gap-4">
                    <span>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</span>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
@endsection
