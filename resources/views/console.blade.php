<x-layout>
    <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16">
        <header class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-semibold text-gray-900 dark:text-white lowercase leading-tight mb-4">
                Console <span class="text-primary">Messages</span>
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">
                This page outputs JavaScript console messages for testing browser automation and console monitoring. Pass messages via query parameters to see them in your browser's developer console.
            </p>
        </header>

        <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-8 shadow-sm">
            @if($messages->isEmpty())
                <div class="prose dark:prose-invert max-w-none">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">How to use</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Add console messages by passing them as query parameters. Each message requires an index, a type, and a message string.
                    </p>

                    <h4 class="text-base font-semibold text-gray-900 dark:text-white mb-3">Available types</h4>
                    <div class="overflow-x-auto mb-4">
                        <table class="min-w-full border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-700">Type</th>
                                    <th class="px-4 py-2 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-700">Description</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-2 text-sm"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs text-gray-700 dark:text-gray-300">log</code></td>
                                    <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">Standard log message</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-sm"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs text-blue-700 dark:text-blue-300">info</code></td>
                                    <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">Informational message</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-sm"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs text-yellow-700 dark:text-yellow-300">warn</code></td>
                                    <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">Warning message</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-sm"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs text-red-700 dark:text-red-300">error</code></td>
                                    <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">Error message</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-sm"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs text-purple-700 dark:text-purple-300">debug</code></td>
                                    <td class="px-4 py-2 text-sm text-gray-600 dark:text-gray-400">Debug message</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-base font-semibold text-gray-900 dark:text-white mb-2">Query string format</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-2">
                        Use lowercase for all type values. Format each message using array notation:
                    </p>
                    <pre class="bg-gray-100 dark:bg-gray-800 p-3 rounded text-xs overflow-x-auto mb-4"><code>messages[INDEX][type]=TYPE&messages[INDEX][message]=MESSAGE</code></pre>

                    <h4 class="text-base font-semibold text-gray-900 dark:text-white mb-2">Simple example</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-2 text-sm">
                        Output a single log message to the console:
                    </p>
                    <p class="text-sm mb-6">
                        <a href="/console?messages[0][type]=log&messages[0][message]=Hello%20World" class="text-primary hover:text-primary-light break-all"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs">/console?messages[0][type]=log&messages[0][message]=Hello%20World</code></a>
                    </p>

                    <h4 class="text-base font-semibold text-gray-900 dark:text-white mb-2">Advanced example</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-2 text-sm">
                        Create multiple console messages with different types:
                    </p>
                    <p class="text-sm text-gray-400 dark:text-gray-500">
                        <a href="/console?messages[0][type]=log&messages[0][message]=Application%20started&messages[1][type]=info&messages[1][message]=User%20logged%20in&messages[2][type]=warn&messages[2][message]=API%20rate%20limit%20approaching&messages[3][type]=error&messages[3][message]=Failed%20to%20connect&messages[4][type]=debug&messages[4][message]=Request%20payload:%20{user:123}" class="text-primary hover:text-primary-light break-all"><code class="bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs">/console?messages[0][type]=log&messages[0][message]=Application%20started&messages[1][type]=info&messages[1][message]=User%20logged%20in&messages[2][type]=warn&messages[2][message]=API%20rate%20limit%20approaching&messages[3][type]=error&messages[3][message]=Failed%20to%20connect&messages[4][type]=debug&messages[4][message]=Request%20payload:%20{user:123}</code></a>
                    </p>
                </div>
            @else
                <div class="mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-gray-600 dark:text-gray-300">
                            The following console messages are being logged. Open your browser's developer console to see them.
                        </p>
                        <a href="/console" class="text-primary hover:text-primary-light font-medium text-sm whitespace-nowrap ml-4">
                            ← Clear messages
                        </a>
                    </div>

                    <div class="space-y-2">
                        @foreach($messages as $index => $message)
                            @php
                                $typeColors = [
                                    'log' => 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300',
                                    'info' => 'bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300',
                                    'warn' => 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300',
                                    'error' => 'bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300',
                                    'debug' => 'bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300',
                                ];
                                $displayType = in_array($message['type'], ['log', 'info', 'warn', 'error', 'debug']) ? $message['type'] : 'log';
                                $colorClass = $typeColors[$displayType] ?? $typeColors['log'];
                            @endphp
                            <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-gray-800/50 rounded-lg">
                                <span class="inline-flex items-center px-2.5 py-1 rounded text-xs font-medium {{ $colorClass }} uppercase">
                                    {{ $displayType }}
                                </span>
                                <span class="flex-1 text-sm text-gray-700 dark:text-gray-300 font-mono break-all">
                                    {{ $message['message'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" class="text-primary hover:text-primary-light font-medium">
                ← Back to Home
            </a>
        </div>
    </section>

    @if($messages->isNotEmpty())
        <script>
            @foreach($messages as $message)
                @php
                    $type = in_array($message['type'], ['log', 'info', 'warn', 'error', 'debug']) ? $message['type'] : 'log';
                    $text = json_encode($message['message']);
                @endphp
                console.{{ $type }}({!! $text !!});
            @endforeach
        </script>
    @endif
</x-layout>