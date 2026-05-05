<?php

it('redirects to the next number with a 302', function () {
    $response = $this->get('/redirect/number/3');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/2');
});

it('terminates the chain with a 204 No Content at zero', function () {
    $response = $this->get('/redirect/number/0');

    $response->assertStatus(204);
});

it('follows the full redirect chain to completion', function () {
    $response = $this->get('/redirect/number/3');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/2');

    $response = $this->get('/redirect/number/2');
    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/1');

    $response = $this->get('/redirect/number/1');
    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/0');

    $response = $this->get('/redirect/number/0');
    $response->assertStatus(204);
});

it('supports large redirect chains', function () {
    $response = $this->get('/redirect/number/20');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/19');
});

it('returns 422 for non-integer numbers', function () {
    $response = $this->getJson('/redirect/number/abc');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});

it('returns 422 for negative numbers', function () {
    $response = $this->getJson('/redirect/number/-1');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});

it('returns 422 for numbers exceeding the maximum', function () {
    $response = $this->getJson('/redirect/number/21');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});

it('redirects to an arbitrary url with a default 302', function () {
    $response = $this->get('/redirect-to?url=https://example.com');

    $response->assertStatus(302);
    $response->assertRedirect('https://example.com');
});

it('redirects to an arbitrary url with a configured 301 status', function () {
    $response = $this->get('/redirect-to?url=https://example.com&status=301');

    $response->assertStatus(301);
    $response->assertRedirect('https://example.com');
});

it('supports the full 3xx range of redirect status codes', function (int $status) {
    $response = $this->get("/redirect-to?url=https://example.com&status={$status}");

    $response->assertStatus($status);
    $response->assertRedirect('https://example.com');
})->with([301, 302, 303, 307, 308]);

it('returns 422 when url is missing', function () {
    $response = $this->getJson('/redirect-to');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('returns 422 when url is not a valid url', function () {
    $response = $this->getJson('/redirect-to?url=not-a-url');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('returns 422 when status is below 300', function () {
    $response = $this->getJson('/redirect-to?url=https://example.com&status=200');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['status']);
});

it('returns 422 when status is at or above 400', function () {
    $response = $this->getJson('/redirect-to?url=https://example.com&status=400');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['status']);
});

it('returns 422 when status is not an integer', function () {
    $response = $this->getJson('/redirect-to?url=https://example.com&status=abc');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['status']);
});

it('rejects javascript: scheme urls', function () {
    $response = $this->getJson('/redirect-to?url=javascript:alert(1)');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('rejects data: scheme urls', function () {
    $response = $this->getJson('/redirect-to?url=data:text/html,<script>alert(1)</script>');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('allows same-host redirects to other paths', function () {
    $host = parse_url(config('app.url'), PHP_URL_HOST);

    $response = $this->get('/redirect-to?url=http://'.$host.'/get');

    $response->assertStatus(302);
    $response->assertRedirect('http://'.$host.'/get');
});

it('rejects redirects that loop back to /redirect-to on the same host', function () {
    $host = parse_url(config('app.url'), PHP_URL_HOST);

    $response = $this->getJson('/redirect-to?url=http://'.$host.'/redirect-to?url=https://example.com');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('rejects /redirect-to loop targets regardless of host case', function () {
    $host = parse_url(config('app.url'), PHP_URL_HOST);

    $response = $this->getJson('/redirect-to?url=http://'.strtoupper($host).'/redirect-to?url=https://example.com');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('rejects /redirect-to loop targets with a trailing slash', function () {
    $host = parse_url(config('app.url'), PHP_URL_HOST);

    $response = $this->getJson('/redirect-to?url=http://'.$host.'/redirect-to/?url=https://example.com');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['url']);
});

it('sets X-Robots-Tag noindex on the redirect response', function () {
    $response = $this->get('/redirect-to?url=https://example.com');

    $response->assertStatus(302);
    expect($response->headers->get('X-Robots-Tag'))->toBe('noindex, nofollow');
});
