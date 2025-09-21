<?php

it('returns JSON document', function () {
    $response = $this->get('/json');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/json');

    $json = $response->json();

    expect($json)->toHaveKey('message', 'This is a simple JSON document');
});
