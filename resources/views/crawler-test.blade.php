<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <nav>
        <ul>
            @if($currentPage !== 'index')
                <li><a href="/crawler-test">Index</a></li>
            @endif
            @foreach([1, 2, 3] as $page)
                @if($currentPage !== $page)
                    <li><a href="/crawler-test/page-{{ $page }}">Page {{ $page }}</a></li>
                @endif
            @endforeach
        </ul>
    </nav>
    <script type="application/json" id="request-mirror-data">{!! json_encode($mirrorData, JSON_UNESCAPED_SLASHES) !!}</script>
</body>
</html>
