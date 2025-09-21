<?php

it('returns request headers', function () {
    $response = $this->withHeaders([
        'X-Custom-Header' => 'test-value',
        'Accept' => 'application/json',
    ])->get('/headers');

    $response->assertOk()
        ->assertJsonStructure([
            'headers',
        ]);

    $headers = $response->json('headers');
    expect($headers)->toHaveKey('x-custom-header', 'test-value');
    expect($headers)->toHaveKey('accept', 'application/json');
});

it('filters out Cloudflare headers', function () {
    $response = $this->withHeaders([
        'X-Custom-Header' => 'test-value',
        'CF-Visitor' => '{"scheme":"https"}',
        'CF-IPCountry' => 'BE',
        'CF-Connecting-IP' => '81.243.180.196',
        'CDN-Loop' => 'cloudflare; loops=1',
        'CF-Ray' => '982c31f10c65ffef-AMS',
        'X-Forwarded-For' => '81.243.180.196',
        'X-Forwarded-Proto' => 'https',
        'Accept' => 'application/json',
    ])->get('/headers');

    $response->assertOk();

    $headers = $response->json('headers');
    expect($headers)->toHaveKey('x-custom-header', 'test-value');
    expect($headers)->toHaveKey('accept', 'application/json');

    // Verify Cloudflare headers are filtered out
    expect($headers)->not->toHaveKey('cf-visitor');
    expect($headers)->not->toHaveKey('cf-ipcountry');
    expect($headers)->not->toHaveKey('cf-connecting-ip');
    expect($headers)->not->toHaveKey('cdn-loop');
    expect($headers)->not->toHaveKey('cf-ray');
    expect($headers)->not->toHaveKey('x-forwarded-for');
    expect($headers)->not->toHaveKey('x-forwarded-proto');
});
