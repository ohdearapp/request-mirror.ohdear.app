<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Why website monitoring is the best investment you'll make this year | Oh Dear Blog</title>
    <meta name="description" content="Downtime happens. Certificates expire. Links break. But here's the thing - the faster you know about it, the less it hurts. Let me tell you why monitoring changed everything for us.">
    <meta name="keywords" content="website monitoring, uptime monitoring, SSL certificates, broken links, Oh Dear, server monitoring, devops">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Mattias Geniar">
    <meta name="publisher" content="Oh Dear BV">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Why website monitoring is the best investment you'll make this year">
    <meta property="og:description" content="Downtime happens. Certificates expire. Links break. But here's the thing - the faster you know about it, the less it hurts.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Oh Dear Blog">
    <meta property="og:locale" content="en_US">

    <!-- Article-specific Open Graph -->
    <meta property="article:published_time" content="{{ now()->subDays(1)->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ now()->subDays(1)->toIso8601String() }}">
    <meta property="article:author" content="https://twitter.com/mattiasgeniar">
    <meta property="article:section" content="Website Monitoring">
    <meta property="article:tag" content="monitoring">
    <meta property="article:tag" content="uptime">
    <meta property="article:tag" content="devops">
    <meta property="article:tag" content="SSL">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="request-mirror.ohdear.app">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Why website monitoring is the best investment you'll make this year">
    <meta name="twitter:description" content="Downtime happens. Certificates expire. Links break. But here's the thing - the faster you know about it, the less it hurts.">
    <meta name="twitter:image" content="{{ asset('img/og-image.png') }}">
    <meta name="twitter:site" content="@@OhDearApp">
    <meta name="twitter:creator" content="@@mattiasgeniar">
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="Mattias Geniar">
    <meta name="twitter:label2" content="Reading time">
    <meta name="twitter:data2" content="5 min read">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- JSON-LD Structured Data: Article -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BlogPosting",
        "mainEntityOfPage": {
            "@@type": "WebPage",
            "@@id": "{{ url()->current() }}"
        },
        "headline": "Why website monitoring is the best investment you'll make this year",
        "description": "Downtime happens. Certificates expire. Links break. But here's the thing - the faster you know about it, the less it hurts. Let me tell you why monitoring changed everything for us.",
        "image": [
            "{{ asset('img/og-image.png') }}"
        ],
        "author": {
            "@@type": "Person",
            "name": "Mattias Geniar",
            "url": "https://ma.ttias.be",
            "jobTitle": "Co-founder",
            "worksFor": {
                "@@type": "Organization",
                "name": "Oh Dear"
            },
            "sameAs": [
                "https://twitter.com/mattiasgeniar",
                "https://github.com/mattiasgeniar",
                "https://www.linkedin.com/in/mattiasgeniar"
            ]
        },
        "publisher": {
            "@@type": "Organization",
            "name": "Oh Dear",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ asset('img/logo/ohdear-logo.svg') }}"
            }
        },
        "datePublished": "{{ now()->subDays(1)->toIso8601String() }}",
        "dateModified": "{{ now()->subDays(1)->toIso8601String() }}",
        "wordCount": "850",
        "articleSection": "Website Monitoring",
        "keywords": ["website monitoring", "uptime", "SSL certificates", "broken links", "devops"],
        "inLanguage": "en-US",
        "isAccessibleForFree": true,
        "commentCount": 12
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
                "name": "Blog",
                "item": "https://ohdear.app/blog"
            },
            {
                "@@type": "ListItem",
                "position": 3,
                "name": "Why website monitoring is the best investment you'll make this year",
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
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Request Mirror Blog Example</span>
                <a href="{{ route('home') }}" class="text-sm text-primary hover:text-primary-light">Back to Request Mirror</a>
            </div>
        </div>
    </header>

    <!-- Article -->
    <article class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Article Header -->
        <header class="max-w-3xl mx-auto mb-12">
            <!-- Category -->
            <div class="mb-4">
                <a href="#" class="inline-block px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                    Website Monitoring
                </a>
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl font-semibold text-gray-900 dark:text-white mb-6 leading-tight">
                Why website monitoring is the best investment you'll make this year
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 dark:text-gray-400">
                <!-- Author -->
                <address class="flex items-center not-italic">
                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                        <span class="text-primary font-medium">MG</span>
                    </div>
                    <div>
                        <a rel="author" href="https://ma.ttias.be" class="font-medium text-gray-900 dark:text-white hover:text-primary">
                            Mattias Geniar
                        </a>
                        <p class="text-xs">Co-founder, Oh Dear</p>
                    </div>
                </address>

                <span class="text-gray-300 dark:text-gray-600">|</span>

                <!-- Date -->
                <time datetime="{{ now()->subDays(1)->toIso8601String() }}">{{ now()->subDays(1)->format('F j, Y') }}</time>

                <span class="text-gray-300 dark:text-gray-600">|</span>

                <!-- Reading time -->
                <span>5 min read</span>
            </div>
        </header>

        <!-- Key Takeaways Card -->
        <div class="max-w-3xl mx-auto mb-12">
            <div class="card !bg-primary/5 !border-primary/20">
                <div class="card-icon !bg-primary/20 !w-10 !h-10 !mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h2 class="font-semibold text-gray-900 dark:text-white mb-4">Key takeaways</h2>
                <ul class="space-y-2">
                    <li class="flex items-start text-sm text-gray-600 dark:text-gray-300">
                        <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Downtime costs more than just revenue - it erodes trust and SEO rankings
                    </li>
                    <li class="flex items-start text-sm text-gray-600 dark:text-gray-300">
                        <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Monitoring isn't just uptime - SSL, DNS, broken links, and cron jobs matter too
                    </li>
                    <li class="flex items-start text-sm text-gray-600 dark:text-gray-300">
                        <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        The ROI is clear: a few euros per month vs. thousands in potential losses
                    </li>
                </ul>
            </div>
        </div>

        <!-- Article Content -->
        <div class="max-w-3xl mx-auto prose prose-lg">
            <p class="lead">
                Downtime happens. Certificates expire. Links break. But here's the thing - the faster you know about it, the less it hurts. Let me tell you why monitoring changed everything for us.
            </p>

            <h2>The 3 AM wake-up call nobody wants</h2>

            <p>
                Picture this: it's 3 AM on a Saturday. Your phone buzzes. A customer just emailed you - your website has been down for the past four hours. Four hours of lost sales, frustrated visitors, and a search engine that's now questioning your reliability.
            </p>

            <p>
                Would you have known about this if that customer hadn't reached out? If you're like most of us before we started monitoring properly - probably not.
            </p>

            <h2>It's not just about uptime</h2>

            <p>
                Here's what most people get wrong about monitoring: they think it's just about checking if the server responds. But there's so much more that can go sideways:
            </p>

            <ul>
                <li><strong>SSL certificates expire</strong> - and browsers will scare away your visitors with big red warnings</li>
                <li><strong>Links break</strong> - that blog post you linked to? Gone. Now you're sending people to 404 pages</li>
                <li><strong>DNS changes</strong> - someone tweaked a record and suddenly your emails aren't arriving</li>
                <li><strong>Scheduled tasks fail silently</strong> - your daily backup hasn't run in two weeks, and you had no idea</li>
                <li><strong>Performance degrades</strong> - your site loads in 8 seconds instead of 2, and users are bouncing</li>
            </ul>

            <p>
                Each of these can hurt your business. And the worst part? They often happen silently, without anyone noticing until real damage is done.
            </p>

            <h2>The real cost of not monitoring</h2>

            <p>
                Let's be honest about the numbers. A single hour of downtime can cost anywhere from hundreds to thousands of euros - depending on your traffic and business model. But it's not just the direct revenue loss:
            </p>

            <ul>
                <li>SEO rankings drop when Google sees your site is unreliable</li>
                <li>Customer trust erodes with each bad experience</li>
                <li>Your team wastes hours firefighting instead of building</li>
            </ul>

            <p>
                Compare that to the cost of monitoring - typically a few euros per month - and the ROI becomes pretty clear.
            </p>

            <h2>What good monitoring looks like</h2>

            <p>
                We built Oh Dear because we needed something that actually works for developers and agencies. Not another dashboard you'll forget to check, but proactive alerts that reach you wherever you are - Slack, Discord, email, SMS, PagerDuty, you name it.
            </p>

            <p>
                The key is getting notified before your customers do. When your SSL certificate is about to expire in 14 days, you should know. When a page starts returning 500 errors, you should know within a minute. When your cron jobs stop running, you should know immediately.
            </p>

            <h2>Start monitoring today</h2>

            <p>
                If you're not monitoring your sites yet, start today. Seriously. Set up uptime monitoring at the very minimum - it takes five minutes and could save you hours of headaches.
            </p>

            <p>
                And if you want the full picture - uptime, SSL, broken links, scheduled tasks, performance, and more - well, you know where to find us. We've made it super simple to get started, no credit card required.
            </p>

            <p>
                Because downtime happens. But how quickly you respond? That's entirely up to you.
            </p>
        </div>

        <!-- Tags -->
        <footer class="max-w-3xl mx-auto mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-wrap gap-2 mb-8">
                <span class="text-sm text-gray-500 dark:text-gray-400 mr-2">Tags:</span>
                <a href="#" class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">monitoring</a>
                <a href="#" class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">uptime</a>
                <a href="#" class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">SSL</a>
                <a href="#" class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">devops</a>
            </div>

            <!-- Author Bio -->
            <div class="card">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-primary font-semibold text-lg">MG</span>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-900 dark:text-white">Mattias Geniar</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Co-founder at Oh Dear</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
                            Linux sysadmin, developer, and general tech enthusiast. Building monitoring tools that actually help developers sleep better at night.
                        </p>
                        <div class="flex gap-3">
                            <a href="https://twitter.com/mattiasgeniar" class="inline-flex items-center text-sm text-primary hover:text-primary-light">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                                Twitter
                            </a>
                            <a href="https://ma.ttias.be" class="inline-flex items-center text-sm text-primary hover:text-primary-light">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                                ma.ttias.be
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </article>

    <!-- Simple Footer -->
    <footer class="border-t border-gray-200 dark:border-gray-800 mt-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                This is an example blog page for testing purposes.
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
