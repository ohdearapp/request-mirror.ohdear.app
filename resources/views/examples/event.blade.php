<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Laravel Meetup by Oh Dear - January 2025 | Antwerp, Belgium</title>
    <meta name="description" content="Join us for an evening of Laravel talks, networking, and drinks. Free entry, great conversations, and a chance to meet fellow developers who care about building reliable applications.">
    <meta name="keywords" content="Laravel meetup, PHP meetup, Antwerp, developer event, Oh Dear, Belgium, web development">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Oh Dear">
    <meta name="publisher" content="Oh Dear BV">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="event">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Laravel Meetup by Oh Dear - January 2025">
    <meta property="og:description" content="Join us for an evening of Laravel talks, networking, and drinks. Free entry, great conversations.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Oh Dear Events">
    <meta property="og:locale" content="en_US">

    <!-- Event-specific Open Graph -->
    <meta property="event:start_time" content="{{ now()->addDays(30)->setTime(18, 0)->toIso8601String() }}">
    <meta property="event:end_time" content="{{ now()->addDays(30)->setTime(22, 0)->toIso8601String() }}">
    <meta property="event:location" content="De Koninck, Antwerp, Belgium">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Laravel Meetup by Oh Dear - January 2025">
    <meta name="twitter:description" content="Join us for an evening of Laravel talks, networking, and drinks. Free entry, great conversations.">
    <meta name="twitter:image" content="{{ asset('img/og-image.png') }}">
    <meta name="twitter:site" content="@@OhDearApp">
    <meta name="twitter:label1" content="Date">
    <meta name="twitter:data1" content="{{ now()->addDays(30)->format('F j, Y') }}">
    <meta name="twitter:label2" content="Location">
    <meta name="twitter:data2" content="Antwerp, Belgium">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- JSON-LD Structured Data: Event -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Event",
        "name": "Laravel Meetup by Oh Dear",
        "description": "Join us for an evening of Laravel talks, networking, and drinks. Whether you're building your first CRUD app or architecting enterprise systems, you're welcome here. Free entry, great conversations, and a chance to meet fellow developers who care about building reliable applications.",
        "image": [
            "{{ asset('img/og-image.png') }}"
        ],
        "startDate": "{{ now()->addDays(30)->setTime(18, 0)->toIso8601String() }}",
        "endDate": "{{ now()->addDays(30)->setTime(22, 0)->toIso8601String() }}",
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "location": {
            "@@type": "Place",
            "name": "De Koninck - Antwerp City Brewery",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "Mechelsesteenweg 291",
                "addressLocality": "Antwerp",
                "postalCode": "2018",
                "addressRegion": "Antwerp",
                "addressCountry": "BE"
            },
            "geo": {
                "@@type": "GeoCoordinates",
                "latitude": 51.2044,
                "longitude": 4.4212
            }
        },
        "organizer": {
            "@@type": "Organization",
            "name": "Oh Dear",
            "url": "https://ohdear.app",
            "logo": "{{ asset('img/logo/ohdear-logo.svg') }}"
        },
        "performer": [
            {
                "@@type": "Person",
                "name": "Mattias Geniar",
                "jobTitle": "Co-founder, Oh Dear"
            },
            {
                "@@type": "Person",
                "name": "Freek Van der Herten",
                "jobTitle": "Co-founder, Oh Dear"
            }
        ],
        "offers": {
            "@@type": "Offer",
            "name": "General Admission",
            "price": "0",
            "priceCurrency": "EUR",
            "availability": "https://schema.org/InStock",
            "url": "{{ url()->current() }}",
            "validFrom": "{{ now()->subDays(1)->startOfDay()->toIso8601String() }}"
        },
        "maximumAttendeeCapacity": 80,
        "remainingAttendeeCapacity": 23,
        "isAccessibleForFree": true,
        "inLanguage": "en",
        "typicalAgeRange": "18-",
        "audience": {
            "@@type": "Audience",
            "audienceType": "Developers, DevOps, Tech Enthusiasts"
        }
    }
    </script>

    <!-- JSON-LD Structured Data: BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://ohdear.app/"
            },
            {
                "@@type": "ListItem",
                "position": 2,
                "name": "Events",
                "item": "https://ohdear.app/events"
            },
            {
                "@@type": "ListItem",
                "position": 3,
                "name": "Laravel Meetup - January 2025",
                "item": "{{ url()->current() }}"
            }
        ]
    }
    </script>

    <!-- JSON-LD Structured Data: Organization -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Oh Dear",
        "url": "https://ohdear.app",
        "logo": "{{ asset('img/logo/ohdear-logo.svg') }}",
        "sameAs": [
            "https://twitter.com/OhDearApp",
            "https://github.com/ohdearapp"
        ]
    }
    </script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-1000 text-gray-900 dark:text-white min-h-screen">

    <!-- Simple Header -->
    <header class="border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Request Mirror Event Example</span>
                <a href="{{ route('home') }}" class="text-sm text-primary hover:text-primary-light">Back to Request Mirror</a>
            </div>
        </div>
    </header>

    <!-- Event Content -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Event Header -->
        <header class="mb-10">
            <div class="mb-4">
                <span class="inline-block px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                    Developer Meetup
                </span>
            </div>

            <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                Laravel Meetup by Oh Dear
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                An evening of talks, networking, and drinks with fellow Laravel developers. No slides full of marketing fluff - just real conversations about building reliable web applications.
            </p>

            <!-- Event Meta Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Date & Time -->
                <div class="card !p-5 text-center">
                    <div class="card-icon !w-10 !h-10 !mb-3 mx-auto">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Date & Time</h3>
                    <p class="font-semibold text-gray-900 dark:text-white">
                        <time datetime="{{ now()->addDays(30)->setTime(18, 0)->toIso8601String() }}">{{ now()->addDays(30)->format('M j, Y') }}</time>
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">18:00 - 22:00</p>
                </div>

                <!-- Location -->
                <div class="card !p-5 text-center">
                    <div class="card-icon !w-10 !h-10 !mb-3 mx-auto">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Location</h3>
                    <p class="font-semibold text-gray-900 dark:text-white">Antwerp</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">De Koninck</p>
                </div>

                <!-- Price -->
                <div class="card !p-5 text-center">
                    <div class="card-icon !w-10 !h-10 !mb-3 mx-auto">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Price</h3>
                    <p class="font-semibold text-gray-900 dark:text-white">Free</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Drinks included</p>
                </div>

                <!-- Capacity -->
                <div class="card !p-5 text-center">
                    <div class="card-icon !w-10 !h-10 !mb-3 mx-auto">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Spots Left</h3>
                    <p class="font-semibold text-gray-900 dark:text-white">23 / 80</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Register soon</p>
                </div>
            </div>
        </header>

        <!-- Register Button -->
        <div class="mb-10">
            <a href="#register" class="inline-flex items-center justify-center w-full sm:w-auto px-8 py-4 bg-primary hover:bg-primary-light text-white font-medium rounded-xl transition-colors text-lg">
                Register for Free
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

        <!-- About the Event -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">About the event</h2>
            <div class="prose prose-gray dark:prose-invert max-w-none">
                <p>
                    We're hosting another Laravel meetup - and you're invited. Whether you're building your first CRUD app or architecting enterprise systems, you're welcome here.
                </p>
                <p>
                    The format is simple: a couple of short talks followed by plenty of time for networking. We find that the best conversations happen over a drink, not during a three-hour presentation. So we keep the talks short and the bar open.
                </p>
                <p>
                    This is a social gathering of like-minded developers. No sales pitches, no recruiting booths - just people who care about building reliable web applications and want to share what they've learned.
                </p>
            </div>
        </section>

        <!-- Schedule -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Schedule</h2>
            <div class="space-y-3">
                <div class="card !p-4 flex gap-4 items-start">
                    <div class="w-16 flex-shrink-0">
                        <time class="text-sm font-semibold text-primary">18:00</time>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 dark:text-white">Doors Open</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Grab a drink, find a seat, say hi to someone new</p>
                    </div>
                </div>
                <div class="card !p-4 flex gap-4 items-start">
                    <div class="w-16 flex-shrink-0">
                        <time class="text-sm font-semibold text-primary">18:30</time>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 dark:text-white">Talk: "Monitoring in Production - What Actually Matters"</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Mattias Geniar shares lessons learned from monitoring thousands of sites</p>
                    </div>
                </div>
                <div class="card !p-4 flex gap-4 items-start">
                    <div class="w-16 flex-shrink-0">
                        <time class="text-sm font-semibold text-primary">19:15</time>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 dark:text-white">Talk: "Building Packages That Developers Actually Want to Use"</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Freek Van der Herten on open source, developer experience, and community</p>
                    </div>
                </div>
                <div class="card !p-4 flex gap-4 items-start">
                    <div class="w-16 flex-shrink-0">
                        <time class="text-sm font-semibold text-primary">20:00</time>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 dark:text-white">Networking & Drinks</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">The best part - meet fellow developers, share war stories, make new friends</p>
                    </div>
                </div>
                <div class="card !p-4 flex gap-4 items-start">
                    <div class="w-16 flex-shrink-0">
                        <time class="text-sm font-semibold text-primary">22:00</time>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 dark:text-white">Wrap Up</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Last call, but feel free to continue at the pub next door</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Speakers -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Speakers</h2>
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="card !p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <span class="text-primary font-semibold text-lg">MG</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Mattias Geniar</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Co-founder, Oh Dear</p>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Linux sysadmin turned entrepreneur. Passionate about servers, monitoring, and making complex things simple.</p>
                </div>
                <div class="card !p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <span class="text-primary font-semibold text-lg">FV</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Freek Van der Herten</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Co-founder, Oh Dear</p>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Open source enthusiast with 200+ packages. Believes in sharing knowledge and building tools that make developers' lives easier.</p>
                </div>
            </div>
        </section>

        <!-- Location Map Placeholder -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Location</h2>
            <div class="card text-center">
                <div class="card-icon !w-14 !h-14 !mb-4 mx-auto">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">De Koninck - Antwerp City Brewery</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Mechelsesteenweg 291, 2018 Antwerp, Belgium</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Easy to reach by tram (lines 7, 15) or car (parking available nearby)</p>
            </div>
        </section>

        <!-- What to Expect -->
        <section class="mb-10">
            <div class="card !bg-primary/5 !border-primary/20">
                <div class="card-icon !bg-primary/20 !w-10 !h-10 !mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h2 class="font-semibold text-gray-900 dark:text-white mb-4">What to expect</h2>
                <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Two focused talks - no death by PowerPoint, we promise</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Free drinks (beer, soft drinks, coffee) - because good conversations need fuel</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Plenty of networking time - the talks are just the warm-up</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>A welcoming atmosphere - junior, senior, doesn't matter. Everyone's here to learn</span>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Simple Footer -->
    <footer class="border-t border-gray-200 dark:border-gray-800 mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                This is an example event page for testing purposes.
                <a href="{{ route('home') }}" class="text-primary hover:text-primary-light">Back to Request Mirror</a>
            </p>
        </div>
    </footer>

    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>
