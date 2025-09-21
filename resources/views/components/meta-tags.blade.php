<!-- HTML Meta Tags -->
<title>{{ $title ?? 'Request Mirror - HTTP Testing Service by Oh Dear' }}</title>
<meta name="description" content="The simple HTTP request testing tool. Send a request and get instant JSON response with all request details. Perfect for API development, webhook testing, and learning HTTP. Free service by Oh Dear.">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title ?? 'Request Mirror - HTTP Testing Service by Oh Dear' }}">
<meta property="og:description" content="The simple HTTP request testing tool. Send a request and get instant JSON response with all request details. Perfect for API development, webhook testing, and learning HTTP. Free service by Oh Dear.">
<meta property="og:image" content="{{ asset('img/og-image.png') }}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="request-mirror.ohdear.app">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="{{ $title ?? 'Request Mirror - HTTP Testing Service by Oh Dear' }}">
<meta name="twitter:description" content="The simple HTTP request testing tool. Send a request and get instant JSON response with all request details. Perfect for API development, webhook testing, and learning HTTP. Free service by Oh Dear.">
<meta name="twitter:image" content="{{ asset('img/og-image.png') }}">
