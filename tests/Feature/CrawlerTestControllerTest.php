<?php

it('returns the index page with links and mirror data', function () {
    $response = $this->get('/crawler-test');

    $response->assertOk();
    $response->assertSee('Crawler Test Index');
    $response->assertSee('/crawler-test/page-1');
    $response->assertSee('/crawler-test/page-2');
    $response->assertSee('/crawler-test/page-3');
    $response->assertSee('request-mirror-data');
});

it('returns sub-pages with links and mirror data', function (int $page) {
    $response = $this->get("/crawler-test/page-{$page}");

    $response->assertOk();
    $response->assertSee("Crawler Test Page {$page}");
    $response->assertSee('/crawler-test');
    $response->assertSee('request-mirror-data');
})->with([1, 2, 3]);

it('echoes custom headers in the mirror data', function () {
    $response = $this->withHeaders([
        'X-Custom-Test' => 'test-value-123',
    ])->get('/crawler-test');

    $response->assertOk();

    $content = $response->getContent();
    preg_match('/<script type="application\/json" id="request-mirror-data">(.*?)<\/script>/s', $content, $matches);

    $mirrorData = json_decode($matches[1], true);

    expect($mirrorData['headers'])->toHaveKey('x-custom-test', 'test-value-123');
});

it('echoes query parameters in the mirror data', function () {
    $response = $this->get('/crawler-test?foo=bar&baz=qux');

    $response->assertOk();

    $content = $response->getContent();
    preg_match('/<script type="application\/json" id="request-mirror-data">(.*?)<\/script>/s', $content, $matches);

    $mirrorData = json_decode($matches[1], true);

    expect($mirrorData['args'])->toHaveKey('foo', 'bar');
    expect($mirrorData['args'])->toHaveKey('baz', 'qux');
});

it('returns 404 for invalid page numbers', function () {
    $this->get('/crawler-test/page-4')->assertNotFound();
    $this->get('/crawler-test/page-0')->assertNotFound();
});
