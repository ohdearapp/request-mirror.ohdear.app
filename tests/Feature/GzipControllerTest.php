<?php

it('returns gzipped data with correct headers', function () {
    $response = $this->get('/gzip');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/json')
        ->assertHeader('Content-Encoding', 'gzip')
        ->assertHeader('Vary', 'Accept-Encoding');

    // Decompress the response content to verify it's valid JSON
    $decompressed = gzdecode($response->getContent());
    expect($decompressed)->toBeString();

    $json = json_decode($decompressed, true);
    expect($json)->toBeArray()
        ->toHaveKeys(['message', 'data', 'timestamp', 'gzipped'])
        ->and($json['message'])->toBe('This is a gzipped response')
        ->and($json['data'])->toBe('Hello, World! This content is compressed with gzip.')
        ->and($json['gzipped'])->toBeTrue();
});