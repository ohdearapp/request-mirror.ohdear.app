<?php

it('returns JSON document', function () {
    $response = $this->get('/json');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/json');

    $json = $response->json();

    expect($json)
        ->toHaveKey('message', 'This is a simple JSON document')
        ->toHaveKey('generated_by', 'request-mirror')
        ->toHaveKey('timestamp')
        ->toHaveKey('data');

    expect($json['data'])
        ->toHaveKey('example', true)
        ->toHaveKey('version', '1.0');
});