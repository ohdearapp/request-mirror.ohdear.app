<?php

it('returns DELETE request data', function () {
    $response = $this->delete('/delete?id=456');

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
        ])
        ->assertJson([
            'args' => [
                'id' => '456',
            ],
        ]);

    expect($response->json('url'))->toContain('/delete?');
    expect($response->json('url'))->toContain('id=456');
});