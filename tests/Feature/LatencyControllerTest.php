<?php

it('returns a fixed delay response', function () {
    $start = microtime(true);
    $response = $this->get('/latency/100');
    $elapsed = (microtime(true) - $start) * 1000;

    $response->assertStatus(200);
    $response->assertJsonStructure(['delay_ms', 'headers', 'origin', 'url']);
    $response->assertJson(['delay_ms' => 100]);
    expect($elapsed)->toBeGreaterThanOrEqual(100);
});

it('returns error for non-integer milliseconds', function () {
    $response = $this->getJson('/latency/abc');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['milliseconds']);
});

it('returns error for negative milliseconds', function () {
    $response = $this->getJson('/latency/-100');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['milliseconds']);
});

it('returns error for milliseconds exceeding maximum', function () {
    $response = $this->getJson('/latency/15000');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['milliseconds']);
});

it('returns a random delay between min and max', function () {
    $start = microtime(true);
    $response = $this->get('/latency/between/50/and/100');
    $elapsed = (microtime(true) - $start) * 1000;

    $response->assertStatus(200);
    $response->assertJsonStructure(['delay_ms', 'headers', 'origin', 'url']);
    $delayMs = $response->json('delay_ms');
    expect($delayMs)->toBeGreaterThanOrEqual(50);
    expect($delayMs)->toBeLessThanOrEqual(100);
    expect($elapsed)->toBeGreaterThanOrEqual(50);
});

it('returns error for non-integer min in between route', function () {
    $response = $this->getJson('/latency/between/abc/and/100');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['min']);
});

it('returns error for non-integer max in between route', function () {
    $response = $this->getJson('/latency/between/50/and/xyz');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['max']);
});

it('returns error for negative min in between route', function () {
    $response = $this->getJson('/latency/between/-50/and/100');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['min']);
});

it('returns error for min exceeding maximum in between route', function () {
    $response = $this->getJson('/latency/between/15000/and/20000');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['min', 'max']);
});

it('returns error when min is greater than max', function () {
    $response = $this->getJson('/latency/between/200/and/100');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['min']);
});

it('returns a random delay between 0 and 1000ms', function () {
    $start = microtime(true);
    $response = $this->get('/latency/random');
    $elapsed = (microtime(true) - $start) * 1000;

    $response->assertStatus(200);
    $response->assertJsonStructure(['delay_ms', 'headers', 'origin', 'url']);
    $delayMs = $response->json('delay_ms');
    expect($delayMs)->toBeGreaterThanOrEqual(0);
    expect($delayMs)->toBeLessThanOrEqual(1000);
});

it('allows zero milliseconds delay', function () {
    $response = $this->get('/latency/0');

    $response->assertStatus(200);
    $response->assertJson(['delay_ms' => 0]);
});

it('allows maximum milliseconds delay', function () {
    $start = microtime(true);
    $response = $this->get('/latency/1000');
    $elapsed = (microtime(true) - $start) * 1000;

    $response->assertStatus(200);
    $response->assertJson(['delay_ms' => 1000]);
    expect($elapsed)->toBeGreaterThanOrEqual(1000);
});

it('returns error for milliseconds exceeding 1000', function () {
    $response = $this->getJson('/latency/1001');

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['milliseconds']);
});

it('allows equal min and max in between route', function () {
    $start = microtime(true);
    $response = $this->get('/latency/between/50/and/50');
    $elapsed = (microtime(true) - $start) * 1000;

    $response->assertStatus(200);
    $response->assertJson(['delay_ms' => 50]);
    expect($elapsed)->toBeGreaterThanOrEqual(50);
});
