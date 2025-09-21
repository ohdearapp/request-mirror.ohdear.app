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