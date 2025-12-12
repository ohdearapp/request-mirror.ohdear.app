<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Contact Oh Dear - Website Monitoring Support</title>
    <meta name="description" content="Get in touch with the Oh Dear team. We're based in Antwerp, Belgium, and we're always happy to help with questions about website monitoring.">
    <meta name="keywords" content="Oh Dear contact, website monitoring support, Antwerp, Belgium, Oh Dear">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Oh Dear">
    <meta name="publisher" content="Oh Dear">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Contact Oh Dear">
    <meta property="og:description" content="Get in touch with the Oh Dear team. We're based in Antwerp, Belgium.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}">
    <meta property="og:site_name" content="Oh Dear">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Contact Oh Dear">
    <meta name="twitter:description" content="Get in touch with the Oh Dear team. We're based in Antwerp, Belgium.">
    <meta name="twitter:site" content="@@OhDearApp">

    <!-- Geo Tags -->
    <meta name="geo.region" content="BE-VAN">
    <meta name="geo.placename" content="Antwerp">
    <meta name="geo.position" content="51.2194;4.4025">
    <meta name="ICBM" content="51.2194, 4.4025">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- JSON-LD Structured Data: LocalBusiness -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "@@id": "https://ohdear.app/#organization",
        "name": "Oh Dear",
        "alternateName": "Oh Dear",
        "description": "Oh Dear is an all-in-one website monitoring tool that checks uptime, SSL certificates, broken links, scheduled tasks, and more.",
        "url": "https://ohdear.app",
        "logo": "{{ asset('img/logo/ohdear-logo.svg') }}",
        "image": "{{ asset('img/og-image.png') }}",
        "telephone": "+32 3 123 45 67",
        "email": "support@@ohdear.app",
        "priceRange": "€€",
        "currenciesAccepted": "EUR",
        "paymentAccepted": "Credit Card, PayPal, Bank Transfer",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Hemelshoek 277A",
            "addressLocality": "Berlaar",
            "postalCode": "2590",
            "addressRegion": "Berlaar",
            "addressCountry": "BE"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 51.2194,
            "longitude": 4.4025
        },
        "openingHoursSpecification": [
            {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "17:00"
            }
        ],
        "sameAs": [
            "https://twitter.com/OhDearApp",
            "https://github.com/ohdearapp",
            "https://www.linkedin.com/company/ohdearapp"
        ],
        "founder": [
            {
                "@@type": "Person",
                "name": "Mattias Geniar"
            },
            {
                "@@type": "Person",
                "name": "Freek Van der Herten"
            }
        ],
        "foundingDate": "2018",
        "numberOfEmployees": {
            "@@type": "QuantitativeValue",
            "minValue": 2,
            "maxValue": 10
        },
        "areaServed": "Worldwide",
        "serviceType": "Website Monitoring",
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Website Monitoring Services",
            "itemListElement": [
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Uptime Monitoring"
                    }
                },
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "SSL Certificate Monitoring"
                    }
                },
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Broken Link Detection"
                    }
                }
            ]
        },
        "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "127",
            "bestRating": "5"
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
                "name": "Contact",
                "item": "{{ url()->current() }}"
            }
        ]
    }
    </script>

    <!-- JSON-LD Structured Data: ContactPage -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ContactPage",
        "name": "Contact Oh Dear",
        "description": "Get in touch with the Oh Dear team for questions about website monitoring.",
        "url": "{{ url()->current() }}",
        "mainEntity": {
            "@@type": "Organization",
            "name": "Oh Dear",
            "contactPoint": [
                {
                    "@@type": "ContactPoint",
                    "telephone": "+32 3 123 45 67",
                    "contactType": "customer service",
                    "email": "support@@ohdear.app",
                    "availableLanguage": ["English", "Dutch"],
                    "hoursAvailable": {
                        "@@type": "OpeningHoursSpecification",
                        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                        "opens": "09:00",
                        "closes": "17:00"
                    }
                },
                {
                    "@@type": "ContactPoint",
                    "contactType": "sales",
                    "email": "sales@@ohdear.app",
                    "availableLanguage": ["English", "Dutch"]
                },
                {
                    "@@type": "ContactPoint",
                    "contactType": "technical support",
                    "email": "support@@ohdear.app",
                    "availableLanguage": ["English"]
                }
            ]
        }
    }
    </script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-1000 text-gray-900 dark:text-white min-h-screen">

    <!-- Simple Header -->
    <header class="border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Request Mirror Contact Example</span>
                <a href="{{ route('home') }}" class="text-sm text-primary hover:text-primary-light">Back to Request Mirror</a>
            </div>
        </div>
    </header>

    <!-- Contact Content -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Header -->
        <header class="text-center mb-16">
            <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                Contact Us
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                We're always happy to help. Reach out anytime.
            </p>
        </header>

        <!-- Contact Methods -->
        <section class="mb-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <!-- Email Card -->
                <div class="card">
                    <div class="card-icon">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="card-title">Email us</h2>
                    <div class="space-y-4">
                        <div class="py-2">
                            <a href="mailto:support@ohdear.app" class="text-primary hover:text-primary-light font-mono text-sm">
                                support@ohdear.app
                            </a>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">We typically respond within a few hours</p>
                        </div>
                    </div>
                </div>

                <!-- Twitter Card -->
                <div class="card">
                    <div class="card-icon">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </div>
                    <h2 class="card-title">Twitter / X</h2>
                    <div class="space-y-4">
                        <div class="py-2">
                            <a href="https://twitter.com/OhDearApp" class="text-primary hover:text-primary-light font-mono text-sm" target="_blank" rel="noopener">
                                @OhDearApp
                            </a>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Quick questions? DM us</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Office Information -->
        <section class="mb-16">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Our office</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <!-- Address Card -->
                <div class="card">
                    <div class="card-icon">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Address</h3>
                    <address class="not-italic text-gray-600 dark:text-gray-300 leading-relaxed">
                        Oh Dear<br>
                        Hemelshoek 277A<br>
                        2590 Berlaar<br>
                        Belgium
                    </address>
                </div>

                <!-- Opening Hours Card -->
                <div class="card">
                    <div class="card-icon">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Opening Hours</h3>
                    <dl class="text-gray-600 dark:text-gray-300 space-y-3">
                        <div class="flex justify-between items-center py-1">
                            <dt>Monday - Friday</dt>
                            <dd class="font-medium text-gray-900 dark:text-white">09:00 - 17:00</dd>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <dt>Saturday</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Closed</dd>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <dt>Sunday</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Closed</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <!-- Support Note -->
        <section>
            <div class="card !bg-primary/5 !border-primary/20">
                <div class="card-icon !bg-primary/20">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="card-title">A note about support</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    Our monitoring runs 24/7, but we're humans who sleep at night. For urgent issues, our systems will still alert you immediately. For general questions, we'll get back to you during business hours. We read every email and genuinely care about helping you out.
                </p>
            </div>
        </section>
    </main>

    <!-- Simple Footer -->
    <footer class="border-t border-gray-200 dark:border-gray-800 mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                This is an example contact page for testing purposes.
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
