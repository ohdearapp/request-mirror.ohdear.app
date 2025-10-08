<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Request Headers</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 mb-8">Request Headers</h1>

            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-100 border-b border-gray-200">
                            <th class="w-1/4 px-6 py-4 text-left text-sm font-semibold text-gray-900">Header Name</th>
                            <th class="w-3/4 px-6 py-4 text-left text-sm font-semibold text-gray-900">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 0; @endphp
                        @foreach(request()->headers->all() as $name => $values)
                            <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' }} border-b border-gray-200 last:border-b-0">
                                <td class="px-6 py-4 text-sm font-mono text-gray-700 break-words">{{ $name }}</td>
                                <td class="px-6 py-4 text-sm font-mono text-gray-600 break-all">{{ is_array($values) ? implode(', ', $values) : $values }}</td>
                            </tr>
                            @php $index++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>