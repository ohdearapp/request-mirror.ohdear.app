<?php

it('returns GET request data', function () {
    $response = $this->get('/get?foo=bar&baz=qux');

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
        ])
        ->assertJson([
            'args' => [
                'foo' => 'bar',
                'baz' => 'qux',
            ],
        ]);

    expect($response->json('url'))->toContain('/get?');
    expect($response->json('url'))->toContain('foo=bar');
    expect($response->json('url'))->toContain('baz=qux');
});