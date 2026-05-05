<?php

it('redirects to the next number with a 302', function () {
    $response = $this->get('/redirect/number/3');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/2');
});

it('terminates the chain with a 204 No Content at zero', function () {
    $response = $this->get('/redirect/number/0');

    $response->assertStatus(204);
});

it('follows the full redirect chain to completion', function () {
    $response = $this->get('/redirect/number/3');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/2');

    $response = $this->get('/redirect/number/2');
    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/1');

    $response = $this->get('/redirect/number/1');
    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/0');

    $response = $this->get('/redirect/number/0');
    $response->assertStatus(204);
});

it('supports large redirect chains', function () {
    $response = $this->get('/redirect/number/20');

    $response->assertStatus(302);
    $response->assertRedirect('/redirect/number/19');
});

it('returns 422 for non-integer numbers', function () {
    $response = $this->getJson('/redirect/number/abc');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});

it('returns 422 for negative numbers', function () {
    $response = $this->getJson('/redirect/number/-1');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});

it('returns 422 for numbers exceeding the maximum', function () {
    $response = $this->getJson('/redirect/number/21');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['number']);
});
