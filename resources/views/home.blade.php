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
                        Send a request, and Request Mirror will respond instantly with JSON containing all properties of the original request. Perfect for API development, webhook testing, and learning HTTP.
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

                    <!-- Right: Code Example -->
                    <div class="relative">
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
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
                        <h3 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">Response Keys</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">method</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">HTTP method used</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">url</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Full request URL</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 01-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"/>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">args</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Query string parameters</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">data</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Raw body content</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">headers</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">All HTTP headers</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z"/>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">json</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Parsed JSON payload</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">form</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Form data fields</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">files</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Uploaded files info</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="inline-block w-5 h-5 text-gray-900 dark:text-gray-100">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 919-9"></path>
                                    </svg>
                                </span>
                                <div class="flex-1">
                                    <code class="text-sm font-mono text-primary dark:text-primary/90">origin</code>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Client IP address</p>
                                </div>
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
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/anything">
                                        /anything
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Accepts any HTTP method</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/anything/will/be/accepted">
                                        /anything/*
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Captures any path</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/headers">
                                        /headers
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns request headers</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/ip">
                                        /ip
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns your IP address</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/user-agent">
                                        /user-agent
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns User-Agent string</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/status/418">
                                        /status/{codes}
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns given status code or random from list</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/html">
                                        /html
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns a simple HTML document</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/json">
                                        /json
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns a simple JSON document</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/robots-txt">
                                        /robots-txt
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns robots.txt rules</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/xml">
                                        /xml
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns a simple XML document</div>
                            </div>
                            <div class="py-2">
                                <div class="font-mono text-sm text-gray-700 dark:text-gray-300 mb-1">
                                    <a href="/gzip">
                                        /gzip
                                    </a>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Returns gzip-compressed JSON data</div>
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
  <span class="text-blue-400">"method"</span>: <span class="text-green-400">"POST"</span>,
  <span class="text-blue-400">"url"</span>: <span class="text-green-400">"{{ url('/post') }}"</span>,
  <span class="text-blue-400">"args"</span>: {
    <span class="text-blue-400">"param1"</span>: <span class="text-green-400">"value1"</span>,
    <span class="text-blue-400">"param2"</span>: <span class="text-green-400">"value2"</span>
  },
  <span class="text-blue-400">"data"</span>: <span class="text-green-400">""</span>,
  <span class="text-blue-400">"headers"</span>: {
    <span class="text-blue-400">"Accept"</span>: <span class="text-green-400">"*/*"</span>,
    <span class="text-blue-400">"Content-Type"</span>: <span class="text-green-400">"application/json"</span>,
    <span class="text-blue-400">"Host"</span>: <span class="text-green-400">"{{ request()->getHost() }}"</span>,
    <span class="text-blue-400">"User-Agent"</span>: <span class="text-green-400">"curl/7.64.1"</span>
  },
  <span class="text-blue-400">"json"</span>: {
    <span class="text-blue-400">"key"</span>: <span class="text-green-400">"value"</span>
  },
  <span class="text-blue-400">"form"</span>: {},
  <span class="text-blue-400">"files"</span>: {},
  <span class="text-blue-400">"origin"</span>: <span class="text-green-400">"127.0.0.1"</span>
}</code></pre>
                    </div>
                </div>
            </section>

            <!-- Try it with curl -->
            <section class="mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                        Try it with curl
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Get started in seconds. Here are some examples you can run in your terminal right now
                    </p>
                </div>

                <div class="max-w-4xl mx-auto space-y-8">
                    <!-- Basic GET request -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Basic GET request with query parameters</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <code class="block text-green-400 font-mono text-sm mb-6">curl "{{ url('/get?param1=value1&param2=value2') }}"</code>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>{
  "method": "GET",
  "url": "{{ url('/get?param1=value1&param2=value2') }}",
  "args": {
    "param1": "value1",
    "param2": "value2"
  },
  "headers": {
    "Host": "{{ request()->getHost() }}",
    "User-Agent": "curl/8.7.1",
    "Accept": "*/*"
  },
  "origin": "127.0.0.1"
}</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- POST JSON -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">POST request with JSON data</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <pre class="text-green-400 font-mono text-sm mb-6"><code>curl -X POST {{ url('/post') }} \
  -H "Content-Type: application/json" \
  -d '{"username": "alice", "email": "alice@example.com"}'</code></pre>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>{
  "method": "POST",
  "url": "{{ url('/post') }}",
  "headers": {
    "Content-Type": "application/json",
    "User-Agent": "curl/8.7.1"
  },
  "json": {
    "username": "alice",
    "email": "alice@example.com"
  },
  "data": "{\"username\": \"alice\", \"email\": \"alice@example.com\"}",
  "origin": "127.0.0.1"
}</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- Custom headers -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Test custom headers</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <pre class="text-green-400 font-mono text-sm mb-6"><code>curl {{ url('/headers') }} \
  -H "X-Custom-Header: my-value" \
  -H "Authorization: Bearer token123"</code></pre>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>{
  "headers": {
    "Host": "{{ request()->getHost() }}",
    "User-Agent": "curl/8.7.1",
    "Accept": "*/*",
    "X-Custom-Header": "my-value",
    "Authorization": "Bearer token123"
  }
}</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- Status codes -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Test with specific status codes</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <pre class="text-green-400 font-mono text-sm mb-6"><code># Test a specific status code
curl -i {{ url('/status/404') }}

# Random status from a list
curl -i {{ url('/status/200,404,500') }}</code></pre>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>HTTP/1.1 404 Not Found
Content-Type: application/json

{
  "status": 404
}</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- Form data -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Submit form data</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <pre class="text-green-400 font-mono text-sm mb-6"><code>curl -X POST {{ url('/post') }} \
  -F "name=John Doe" \
  -F "message=Hello World"</code></pre>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>{
  "method": "POST",
  "url": "{{ url('/post') }}",
  "headers": {
    "Content-Type": "multipart/form-data; boundary=---..."
  },
  "form": {
    "name": "John Doe",
    "message": "Hello World"
  },
  "origin": "127.0.0.1"
}</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- /anything endpoint -->
                    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Use the flexible /anything endpoint</h3>
                        <div class="bg-gray-900 dark:bg-gray-800 rounded-xl p-6 border border-gray-800">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-xs text-gray-400 font-mono">Command</div>
                            </div>
                            <pre class="text-green-400 font-mono text-sm mb-6"><code># Accepts any HTTP method and any path
curl -X PATCH {{ url('/anything/users/123') }} \
  -H "Content-Type: application/json" \
  -d '{"active": true}'</code></pre>
                            <div class="border-t border-gray-700 pt-4">
                                <div class="text-xs text-gray-400 font-mono mb-2">Response</div>
                                <pre class="text-xs text-gray-300 overflow-x-auto"><code>{
  "method": "PATCH",
  "url": "{{ url('/anything/users/123') }}",
  "json": {
    "active": true
  },
  "data": "{\"active\": true}",
  "origin": "127.0.0.1"
}</code></pre>
                            </div>
                        </div>
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
