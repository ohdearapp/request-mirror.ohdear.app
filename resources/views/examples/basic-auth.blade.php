@use('Illuminate\Support\Str')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <title>Protected Page - Basic Auth Example</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-gray-1000 text-gray-900 dark:text-gray-100 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center mb-12">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">Authentication Successful</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    You have successfully authenticated using HTTP Basic Authentication.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Request Details</h2>

                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-gray-800">
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Authenticated User</span>
                        <span class="text-sm font-mono text-gray-900 dark:text-white">{{ request()->getUser() }}</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-gray-800">
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Authentication Method</span>
                        <span class="text-sm font-mono text-gray-900 dark:text-white">HTTP Basic</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-gray-800">
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Your IP Address</span>
                        <span class="text-sm font-mono text-gray-900 dark:text-white">{{ request()->ip() }}</span>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">User Agent</span>
                        <span class="text-sm font-mono text-gray-900 dark:text-white truncate max-w-xs" title="{{ request()->userAgent() }}">{{ Str::limit(request()->userAgent(), 50) }}</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ url('/') }}" class="inline-flex items-center text-primary hover:text-primary-light transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to homepage
                </a>
            </div>
        </div>
    </body>
</html>
