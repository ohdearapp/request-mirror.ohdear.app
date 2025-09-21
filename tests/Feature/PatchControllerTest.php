<?php

it('returns PATCH request data', function () {
    $response = $this->patch('/patch?foo=bar', [
        'data' => 'test',
        'number' => 123,
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
            'data',
            'json',
        ])
        ->assertJson([
            'args' => [
                'foo' => 'bar',
            ],
            'form' => [
                'data' => 'test',
                'number' => 123,
            ],
        ]);

    expect($response->json('url'))->toContain('/patch?');
    expect($response->json('url'))->toContain('foo=bar');
});
