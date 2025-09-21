<?php

it('returns PUT request data', function () {
    $response = $this->put('/put?baz=qux', [
        'name' => 'John',
        'age' => 30,
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
                'baz' => 'qux',
            ],
            'form' => [
                'name' => 'John',
                'age' => 30,
            ],
        ]);

    expect($response->json('url'))->toContain('/put?');
    expect($response->json('url'))->toContain('baz=qux');
});
