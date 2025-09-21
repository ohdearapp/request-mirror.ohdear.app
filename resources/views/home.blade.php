<x-layout>

        <!-- Hero Section -->
        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16">
            <header class="text-center">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-gray-900 dark:text-white lowercase leading-tight">
                    The simple <span class="text-primary">HTTP request</span>
                    <br class="hidden sm:block">
                    testing tool
                </h1>
                <div class="max-w-4xl mx-auto mt-6 lg:mt-8">
                    <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                        A simple, free HTTP request testing tool. Send a request, and Request Mirror will respond with JSON containing all properties of the original request.
                    </p>
                </div>
            </header>
        </section>

        <!-- Main Content -->
        <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Feature Highlights -->
            <section class="mb-20">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left: Features -->
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-6">
                            Everything you need to test HTTP requests
                        </h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-1">Complete request mirroring</h3>
                                    <p class="text-gray-600 dark:text-gray-400">See every detail of your HTTP requests - headers, body, query parameters, and more</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-1">All HTTP methods supported</h3>
                                    <p class="text-gray-600 dark:text-gray-400">GET, POST, PUT, PATCH, DELETE - test any HTTP method you need</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-1">No rate limits</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Test as much as you need without worrying about limits or quotas</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Code Example with Waves -->
                    <div class="relative">
                        <!-- Animated Waves Behind Code Block -->
                        <div class="absolute -bottom-8 -left-8 -right-8 h-32 overflow-hidden z-0">
                            <div class="absolute bottom-0 h-32 w-full wave-big-1 bg-[url(/img/wave-big-1.svg)] opacity-30"></div>
                            <div class="absolute bottom-0 h-32 w-full wave-big-2 bg-[url(/img/wave-big-2.svg)] opacity-20"></div>
                        </div>

                        <div class="bg-gray-900 dark:bg-gray-800 rounded-2xl p-6 shadow-xl relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="text-xs text-gray-400 font-mono">Terminal</div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <div class="text-xs text-gray-400 mb-2">Send JSON data:</div>
                                <code class="block text-green-400 font-mono text-sm">
$ curl -X POST {{ url('/post') }} -H "Content-Type: application/json" -d '{"message": "Hello World"}'
                                </code>
                            </div>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 mb-2">Instant JSON response:</div>
                                <div class="text-xs text-gray-500">{"method": "POST", "json": {"message": "Hello World"}, ...}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Available Endpoints -->
            <section class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                        Mirror requests, and more
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        In addition to request mirroring, we offer special endpoints to come in handy during development
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- HTTP Methods -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">HTTP Methods</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between py-2">
                                <span class="font-mono text-sm text-gray-700 dark:text-gray-300">GET /get</span>
                                <span class="px-2 py-1 bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 text-xs rounded-md font-medium">GET</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="font-mono text-sm text-gray-700 dark:text-gray-300">POST /post</span>
                                <span class="px-2 py-1 bg-primary/10 text-primary text-xs rounded-md font-medium">POST</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="font-mono text-sm text-gray-700 dark:text-gray-300">PUT /put</span>
                                <span class="px-2 py-1 bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300 text-xs rounded-md font-medium">PUT</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="font-mono text-sm text-gray-700 dark:text-gray-300">PATCH /patch</span>
                                <span class="px-2 py-1 bg-purple-50 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300 text-xs rounded-md font-medium">PATCH</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="font-mono text-sm text-gray-700 dark:text-gray-300">DELETE /delete</span>
                                <span class="px-2 py-1 bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-300 text-xs rounded-md font-medium">DELETE</span>
                            </div>
                        </div>
                    </div>



                    <!-- Response Info -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">Response Details</h3>
                        <div class="space-y-4">
                            <div class="py-2">
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Complete request data</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Headers, body, query params</div>
                            </div>
                            <div class="py-2">
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">JSON format</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Clean, readable responses</div>
                            </div>
                            <div class="py-2">
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Origin tracking</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">IP address and user agent</div>
                            </div>
                            <div class="py-2">
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">File uploads</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Multipart form support</div>
                            </div>
                            <div class="py-2">
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">URL reconstruction</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Full request URL included</div>
                            </div>
                        </div>
                    </div>

                    <!-- Special Endpoints -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 011 1v1z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">Special Endpoints</h3>
                        <div class="space-y-4">
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/anything</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Accepts any HTTP method</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/anything/*</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Captures any path</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/headers</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns request headers</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/ip</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns your IP address</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/user-agent</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns User-Agent string</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">/status/{codes}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns given status code or random from list</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Response Format -->
            <section class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                        Clean JSON responses
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Every request returns a comprehensive JSON response with all the details you need
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="bg-gray-900 dark:bg-gray-800 rounded-2xl p-8 shadow-xl border border-gray-800">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="text-xs text-gray-400 font-mono">JSON Response</div>
                        </div>
                        <pre class="text-sm text-gray-300 overflow-x-auto"><code class="language-json">{
  <span class="text-blue-400">"args"</span>: {
    <span class="text-blue-400">"param1"</span>: <span class="text-green-400">"value1"</span>,
    <span class="text-blue-400">"param2"</span>: <span class="text-green-400">"value2"</span>
  },
  <span class="text-blue-400">"data"</span>: <span class="text-green-400">""</span>,
  <span class="text-blue-400">"files"</span>: {},
  <span class="text-blue-400">"form"</span>: {},
  <span class="text-blue-400">"headers"</span>: {
    <span class="text-blue-400">"Accept"</span>: <span class="text-green-400">"*/*"</span>,
    <span class="text-blue-400">"Content-Type"</span>: <span class="text-green-400">"application/json"</span>,
    <span class="text-blue-400">"Host"</span>: <span class="text-green-400">"{{ request()->getHost() }}"</span>,
    <span class="text-blue-400">"User-Agent"</span>: <span class="text-green-400">"curl/7.64.1"</span>
  },
  <span class="text-blue-400">"json"</span>: {
    <span class="text-blue-400">"key"</span>: <span class="text-green-400">"value"</span>
  },
  <span class="text-blue-400">"method"</span>: <span class="text-green-400">"POST"</span>,
  <span class="text-blue-400">"origin"</span>: <span class="text-green-400">"127.0.0.1"</span>,
  <span class="text-blue-400">"url"</span>: <span class="text-green-400">"{{ url('/post') }}"</span>
}</code></pre>
                    </div>
                </div>
            </section>

            <!-- Use Cases -->
            <section class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                        Built for developers
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Whether you're building APIs, testing webhooks, or learning HTTP - we've got you covered
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">API Development</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Test your API clients and debug HTTP requests during development. See exactly what your application is sending.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Testing Webhooks</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Inspect webhook payloads and validate your webhook implementations. Perfect for debugging third-party integrations.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Learning HTTP</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Understand how HTTP requests work and experiment with different methods. Great for educational purposes.
                        </p>
                    </div>
                </div>
            </section>
        </main>

</x-layout>
