<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mixed Content Example</title>

    <!-- This CSS is loaded over HTTP (mixed content) -->
    <link rel="stylesheet" href="http://{{ request()->getHost() }}/build/assets/app-BH4THaqP.css">

    <style>
        body { font-family: system-ui, sans-serif; max-width: 640px; margin: 40px auto; padding: 0 20px; color: #333; }
        h1 { margin-bottom: 0.25em; }
        p.subtitle { color: #666; margin-top: 0; }
        .resource { background: #f9f9f9; border: 1px solid #e0e0e0; border-radius: 6px; padding: 16px; margin: 16px 0; }
        .resource h3 { margin-top: 0; }
        code { background: #eee; padding: 2px 6px; border-radius: 3px; font-size: 0.9em; word-break: break-all; }
        a { color: #1a73e8; }
    </style>
</head>
<body>
    <h1>Mixed Content Example</h1>
    <p class="subtitle">This HTTPS page intentionally loads resources over HTTP to trigger mixed content warnings.</p>

    <div class="resource">
        <h3>CSS (http)</h3>
        <p>Loaded via <code>http://{{ request()->getHost() }}/build/assets/app-BH4THaqP.css</code></p>
    </div>

    <div class="resource">
        <h3>Image (http)</h3>
        <!-- This image is loaded over HTTP (mixed content) -->
        <img src="http://{{ request()->getHost() }}/img/og-image.png" alt="Oh Dear OG image loaded over HTTP" width="300">
        <p>Loaded via <code>http://{{ request()->getHost() }}/img/og-image.png</code></p>
    </div>

    <div class="resource">
        <h3>JavaScript (http)</h3>
        <p>Loaded via <code>http://{{ request()->getHost() }}/build/assets/app-l0sNRNKZ.js</code></p>
    </div>

    <!-- This script is loaded over HTTP (mixed content) -->
    <script src="http://{{ request()->getHost() }}/build/assets/app-l0sNRNKZ.js"></script>

    <p><a href="/">← Back to homepage</a></p>
</body>
</html>
