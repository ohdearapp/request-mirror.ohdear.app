<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('components.meta-tags')

        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/img/favicons/manifest.json">
        <link rel="icon" href="/favicon.ico" sizes="any">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-gray-1000 text-gray-900 dark:text-white min-h-screen relative">

        <!-- Header with Oh Dear nav style -->
        <nav class="bg-transparent relative z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div class="flex items-center space-x-4">
                        <a href="https://ohdear.app" target="_blank" class="hover:opacity-80 transition-opacity cursor-pointer">
                            <img src="/img/logo/ohdear-logo.svg" alt="Oh Dear" class="h-8 w-auto">
                        </a>
                        <div class="h-6 w-px bg-gray-300 dark:bg-gray-600"></div>
                        <a href="{{ route('home') }}" class="text-lg font-medium text-gray-900 dark:text-white cursor-pointer hover:opacity-80 transition-opacity">Request Mirror</a>
                    </div>
                    <a href="https://ohdear.app" target="_blank" class="bg-primary hover:bg-primary-light text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors">
                        Visit Oh Dear
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        {{ $slot }}

        <!-- Footer -->
        <footer class="bg-slate-100 dark:bg-gray-1000 border-t border-slate-200 dark:border-gray-700 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="text-center">
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Request Mirror is a <strong>free</strong> HTTP testing tool by <strong>Oh Dear</strong>
                    </p>
                    <div class="flex justify-center space-x-6 text-sm">
                        <a href="https://ohdear.app" target="_blank" class="text-primary hover:text-primary font-medium">
                            Visit Oh Dear
                        </a>
                        <span class="text-gray-400">•</span>
                        <a href="https://ohdear.app/blog" target="_blank" class="text-primary hover:text-primary font-medium">
                            Blog
                        </a>
                        <span class="text-gray-400">•</span>
                        <a href="https://github.com/ohdearapp" target="_blank" class="text-primary hover:text-primary font-medium">
                            GitHub
                        </a>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-600 mt-4">
                        Need comprehensive website monitoring? Check out Oh Dear for uptime monitoring, SSL certificate monitoring, and much more.
                    </p>
                </div>
            </div>
        </footer>

        <script>
            // Simple dark mode toggle based on system preference
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            }
        </script>
    </body>
</html>