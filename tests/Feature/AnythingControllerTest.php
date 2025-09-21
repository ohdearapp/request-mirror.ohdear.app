<?php

it('returns data for GET requests to /anything', function () {
    $response = $this->get('/anything?test=value');

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
            'method',
        ])
        ->assertJson([
            'args' => [
                'test' => 'value',
            ],
            'method' => 'GET',
        ]);

    expect($response->json('url'))->toContain('/anything');
});

it('returns data for POST requests to /anything', function () {
    $response = $this->post('/anything', [
        'name' => 'test',
        'value' => 123,
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
            'method',
            'form',
        ])
        ->assertJson([
            'method' => 'POST',
            'form' => [
                'name' => 'test',
                'value' => 123,
            ],
        ]);
});

it('returns data for requests to /anything with path', function () {
    $response = $this->get('/anything/some/nested/path?foo=bar');

    $response->assertOk()
        ->assertJsonStructure([
            'args',
            'headers',
            'origin',
            'url',
            'method',
        ])
        ->assertJson([
            'args' => [
                'foo' => 'bar',
            ],
            'method' => 'GET',
        ]);

    expect($response->json('url'))->toContain('/anything/some/nested/path');
});
