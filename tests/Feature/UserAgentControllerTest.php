<?php

it('returns user agent string', function () {
    $response = $this->withHeaders([
        'User-Agent' => 'Test Browser 1.0',
    ])->get('/user-agent');

    $response->assertOk()
        ->assertJsonStructure([
            'user-agent',
        ])
        ->assertJson([
            'user-agent' => 'Test Browser 1.0',
        ]);
});