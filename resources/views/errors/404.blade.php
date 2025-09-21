<x-layout title="404 - Page Not Found | Request Mirror">
    <!-- Hero Section with 404 Message -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16">
        <header class="text-center">
            <div class="mb-8">
                <!-- Large 404 with subtle animations -->
                <div class="text-9xl sm:text-[12rem] lg:text-[16rem] font-bold text-primary/20 select-none leading-none">
                    404
                </div>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-gray-900 dark:text-white lowercase leading-tight -mt-16 sm:-mt-20 lg:-mt-24 relative z-10">
                <span class="text-primary">Oops!</span> Page not found
            </h1>
        </header>
    </section>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- 404 Joke Section -->
        <section class="mb-20">
            <div class="max-w-3xl mx-auto text-center">
                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-6">
                        <p class="text-lg text-gray-700 dark:text-gray-300 italic leading-relaxed">
                            "I told my server a joke about HTTP 404 errors..."
                        </p>
                        <p class="text-lg text-primary font-medium mt-4">
                            "But it didn't get it."
                        </p>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        Unlike this page, our API endpoints are always there when you need them!
                    </p>
                    <a href="{{ url('/') }}" class="text-primary hover:text-primary-light font-medium">
                        ← Back to homepage
                    </a>
                </div>
            </div>
        </section>
    </main>
</x-layout>
