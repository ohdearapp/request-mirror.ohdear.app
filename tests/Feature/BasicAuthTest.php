<?php

it('returns 401 without credentials', function () {
    $response = $this->get('/basic-auth');

    $response->assertUnauthorized()
        ->assertHeader('WWW-Authenticate', 'Basic realm="Protected Area"');
});

it('returns 401 with wrong credentials', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Basic '.base64_encode('wrong:credentials'),
    ])->get('/basic-auth');

    $response->assertUnauthorized();
});

it('returns 200 with correct credentials', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Basic '.base64_encode('ohdear:best-monitoring-service-ever'),
    ])->get('/basic-auth');

    $response->assertOk()
        ->assertViewIs('examples.basic-auth')
        ->assertSee('Authentication Successful');
});

it('returns noindex header', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Basic '.base64_encode('ohdear:best-monitoring-service-ever'),
    ])->get('/basic-auth');

    $response->assertHeader('X-Robots-Tag', 'noindex, nofollow');
});
