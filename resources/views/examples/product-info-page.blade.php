<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Oh Dear Subscription - Website Monitoring Service</title>
    <meta name="description" content="Get comprehensive website monitoring with Oh Dear. Track uptime, SSL certificates, broken links, DNS changes, and more. Starting at €15/month.">
    <meta name="keywords" content="website monitoring, uptime monitoring, SSL monitoring, Oh Dear, server monitoring">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Oh Dear">
    <meta name="publisher" content="Oh Dear BV">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Oh Dear Subscription - Website Monitoring Service">
    <meta property="og:description" content="Get comprehensive website monitoring with Oh Dear. Track uptime, SSL certificates, broken links, DNS changes, and more. Starting at €15/month.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Oh Dear - Website Monitoring Service">
    <meta property="og:site_name" content="Oh Dear">
    <meta property="og:locale" content="en_US">

    <!-- Product-specific Open Graph -->
    <meta property="product:price:amount" content="15.00">
    <meta property="product:price:currency" content="EUR">
    <meta property="product:availability" content="in stock">
    <meta property="product:condition" content="new">
    <meta property="product:retailer_item_id" content="OHDEAR-SUB-001">
    <meta property="product:brand" content="Oh Dear">
    <meta property="product:category" content="Software > Website Tools > Monitoring">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="request-mirror.ohdear.app">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Oh Dear Subscription - Website Monitoring Service">
    <meta name="twitter:description" content="Get comprehensive website monitoring with Oh Dear. Track uptime, SSL certificates, broken links, DNS changes, and more. Starting at €15/month.">
    <meta name="twitter:image" content="{{ asset('img/og-image.png') }}">
    <meta name="twitter:image:alt" content="Oh Dear - Website Monitoring Service">
    <meta name="twitter:site" content="@@OhDearApp">
    <meta name="twitter:creator" content="@@OhDearApp">
    <meta name="twitter:label1" content="Price">
    <meta name="twitter:data1" content="€15/month">
    <meta name="twitter:label2" content="Availability">
    <meta name="twitter:data2" content="In Stock">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- JSON-LD Structured Data: Product -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Product",
        "name": "Oh Dear Subscription",
        "description": "All-in-one website monitoring platform. Track uptime, SSL certificates, broken links, DNS changes, scheduled tasks, and application health from a single dashboard.",
        "image": [
            "{{ asset('img/og-image.png') }}"
        ],
        "sku": "OHDEAR-SUB-001",
        "gtin14": "00012345678905",
        "mpn": "OD-MONITOR-2024",
        "category": "Software > Website Tools > Monitoring",
        "brand": {
            "@@type": "Brand",
            "name": "Oh Dear",
            "logo": "{{ asset('img/logo/ohdear-logo.svg') }}"
        },
        "manufacturer": {
            "@@type": "Organization",
            "name": "Oh Dear BV",
            "url": "https://ohdear.app"
        },
        "offers": {
            "@@type": "Offer",
            "url": "https://ohdear.app/",
            "priceCurrency": "EUR",
            "price": "15.00",
            "priceValidUntil": "{{ now()->addYear()->format('Y-m-d') }}",
            "availability": "https://schema.org/InStock",
            "itemCondition": "https://schema.org/NewCondition",
            "seller": {
                "@@type": "Organization",
                "name": "Oh Dear BV",
                "url": "https://ohdear.app"
            },
            "shippingDetails": {
                "@@type": "OfferShippingDetails",
                "shippingRate": {
                    "@@type": "MonetaryAmount",
                    "value": "0",
                    "currency": "EUR"
                },
                "shippingDestination": {
                    "@@type": "DefinedRegion",
                    "addressCountry": "WORLDWIDE"
                },
                "deliveryTime": {
                    "@@type": "ShippingDeliveryTime",
                    "handlingTime": {
                        "@@type": "QuantitativeValue",
                        "minValue": "0",
                        "maxValue": "0",
                        "unitCode": "d"
                    },
                    "transitTime": {
                        "@@type": "QuantitativeValue",
                        "minValue": "0",
                        "maxValue": "0",
                        "unitCode": "d"
                    }
                }
            },
            "hasMerchantReturnPolicy": {
                "@@type": "MerchantReturnPolicy",
                "applicableCountry": "WORLDWIDE",
                "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                "merchantReturnDays": "30",
                "returnMethod": "https://schema.org/ReturnByMail",
                "returnFees": "https://schema.org/FreeReturn"
            }
        },
        "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.75",
            "reviewCount": "2",
            "bestRating": "5",
            "worstRating": "1"
        },
        "review": [
            {
                "@@type": "Review",
                "reviewRating": {
                    "@@type": "Rating",
                    "ratingValue": "4.5",
                    "bestRating": "5"
                },
                "author": {
                    "@@type": "Person",
                    "name": "Sarah Chen"
                },
                "datePublished": "2024-08-15",
                "reviewBody": "Oh Dear has become essential to our operations. The SSL monitoring alone has saved us from several potential outages. Great value for the price."
            },
            {
                "@@type": "Review",
                "reviewRating": {
                    "@@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author": {
                    "@@type": "Person",
                    "name": "Marcus Thompson"
                },
                "datePublished": "2024-09-22",
                "reviewBody": "The best monitoring service out there. Comprehensive, reliable, and the alerts are instant. Been using it for two years now and couldn't be happier."
            }
        ]
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
                "name": "Products",
                "item": "https://ohdear.app/pricing"
            },
            {
                "@@type": "ListItem",
                "position": 3,
                "name": "Oh Dear Subscription",
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
        "name": "Oh Dear BV",
        "url": "https://ohdear.app",
        "logo": "{{ asset('img/logo/ohdear-logo.svg') }}",
        "description": "Oh Dear is an all-in-one website monitoring tool that checks uptime, SSL certificates, broken links, scheduled tasks, and more.",
        "foundingDate": "2018",
        "sameAs": [
            "https://twitter.com/OhDearApp",
            "https://github.com/ohdearapp"
        ],
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "customer service",
            "email": "support@@ohdear.app",
            "availableLanguage": ["English"]
        },
        "address": {
            "@@type": "PostalAddress",
            "addressCountry": "BE"
        }
    }
    </script>

    <!-- JSON-LD Structured Data: FAQPage -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@@type": "Question",
                "name": "What does Oh Dear monitor?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Oh Dear monitors uptime from multiple global locations, SSL certificate expiration, broken links, mixed content, DNS changes, scheduled tasks (cron jobs), and application health checks."
                }
            },
            {
                "@@type": "Question",
                "name": "How quickly will I be notified of issues?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Oh Dear sends instant alerts via multiple channels including Slack, Discord, Microsoft Teams, email, SMS, webhooks, PagerDuty, and Opsgenie. Notifications are sent within seconds of detecting an issue."
                }
            },
            {
                "@@type": "Question",
                "name": "Is there a free trial available?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Yes, Oh Dear offers a free trial period so you can test all features before committing to a subscription. No credit card is required to start your trial."
                }
            },
            {
                "@@type": "Question",
                "name": "What is the refund policy?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Oh Dear offers a 30-day money-back guarantee. If you're not satisfied with the service, you can request a full refund within 30 days of your purchase."
                }
            }
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
                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Request Mirror Product Example</span>
                <a href="{{ route('home') }}" class="text-sm text-primary hover:text-primary-light">Back to Request Mirror</a>
            </div>
        </div>
    </header>

    <!-- Product Section -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12">
            <!-- Product Image -->
            <div class="mb-8 lg:mb-0">
                <div class="bg-gray-100 dark:bg-gray-900 rounded-2xl py-16 border border-gray-200 dark:border-gray-800">
                    <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p class="text-center text-primary font-semibold text-xl leading-tight">
                        oh<br>dear
                    </p>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-4">Oh Dear Subscription</h1>

                <!-- Rating Summary -->
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">4.75 out of 5 (2 reviews)</span>
                </div>

                <!-- Description -->
                <div class="prose prose-gray dark:prose-invert mb-6">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        All-in-one website monitoring that consolidates multiple tools into a single platform. Track uptime from global locations, monitor SSL certificate expiration, detect broken links and mixed content, watch for DNS changes, verify scheduled tasks, and check application health.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Get instant alerts via Slack, Discord, Teams, email, SMS, or webhooks. Because downtime happens, certificates expire, and links break — but the faster you know, the less you need to worry.
                    </p>
                </div>

                <!-- Price -->
                <div class="mb-8">
                    <span class="text-4xl font-semibold text-gray-900 dark:text-white">€15</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>

                <!-- Buy Button -->
                <a href="https://ohdear.app/" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-full sm:w-auto px-8 py-4 bg-primary hover:bg-primary-light text-white font-medium rounded-xl transition-colors text-lg">
                    Buy Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                <!-- Features List -->
                <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-800">
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-4">What's included:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <svg class="w-4 h-4 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Uptime monitoring from multiple locations
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <svg class="w-4 h-4 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            SSL certificate monitoring
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <svg class="w-4 h-4 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Broken link detection
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <svg class="w-4 h-4 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            DNS & scheduled task monitoring
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <svg class="w-4 h-4 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Multi-channel notifications
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <section class="mt-16 pt-12 border-t border-gray-200 dark:border-gray-800">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-8">Customer Reviews</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Review 1 -->
                <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 4; $i++)
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                            <svg class="w-4 h-4" viewBox="0 0 20 20">
                                <defs>
                                    <linearGradient id="halfStar1">
                                        <stop offset="50%" stop-color="currentColor" class="text-yellow-400"/>
                                        <stop offset="50%" stop-color="currentColor" class="text-gray-300 dark:text-gray-600"/>
                                    </linearGradient>
                                </defs>
                                <path fill="url(#halfStar1)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">4.5/5</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        "Oh Dear has become essential to our operations. The SSL monitoring alone has saved us from several potential outages. Great value for the price."
                    </p>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Sarah Chen</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">DevOps Engineer</p>
                </div>

                <!-- Review 2 -->
                <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">5/5</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        "The best monitoring service out there. Comprehensive, reliable, and the alerts are instant. Been using it for two years now and couldn't be happier."
                    </p>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Marcus Thompson</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Senior Developer</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Simple Footer -->
    <footer class="border-t border-gray-200 dark:border-gray-800 mt-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                This is an example product page for testing purposes.
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
