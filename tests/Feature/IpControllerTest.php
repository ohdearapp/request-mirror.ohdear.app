<?php

it('returns client IP address', function () {
    $response = $this->get('/ip');

    $response->assertOk()
        ->assertJsonStructure([
            'origin',
        ]);

    expect($response->json('origin'))->toBe('127.0.0.1');
});
