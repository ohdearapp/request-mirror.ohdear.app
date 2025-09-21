<?php

it('returns specified status code', function () {
    $response = $this->get('/status/201');

    $response->assertStatus(201);
});

it('returns 400 for 4xx status codes', function () {
    $response = $this->get('/status/404');

    $response->assertStatus(404);
});

it('returns 500 for 5xx status codes', function () {
    $response = $this->get('/status/503');

    $response->assertStatus(503);
});
