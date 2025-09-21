<?php

it('returns gzipped data with correct headers', function () {
    $response = $this->get('/gzip');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/json')
        ->assertHeader('Content-Encoding', 'gzip')
        ->assertHeader('Vary', 'Accept-Encoding');

    $decompressed = gzdecode($response->getContent());
    expect($decompressed)->toBeString();
});
