<?php

it('returns 200 when requesting IP is not in the deny list', function () {
    $response = $this->get('/deny?from=192.168.1.1,10.0.0.1');

    $response->assertOk()
        ->assertJson([
            'denied' => false,
            'origin' => '127.0.0.1',
        ]);
});

it('returns 403 when requesting IP is in the deny list', function () {
    $response = $this->get('/deny?from=127.0.0.1,10.0.0.1');

    $response->assertForbidden()
        ->assertJson([
            'denied' => true,
            'origin' => '127.0.0.1',
        ]);
});

it('handles a single IP', function () {
    $response = $this->get('/deny?from=127.0.0.1');

    $response->assertForbidden()
        ->assertJson([
            'denied' => true,
        ]);
});

it('validates from is required', function () {
    $response = $this->getJson('/deny');

    $response->assertUnprocessable()
        ->assertJsonValidationErrors('from');
});

it('validates IPs are valid IPv4', function () {
    $response = $this->getJson('/deny?from=not-an-ip');

    $response->assertUnprocessable()
        ->assertJsonValidationErrors('ips.0');
});

it('validates max 10 IPs', function () {
    $ips = implode(',', array_map(fn ($i) => "10.0.0.{$i}", range(1, 11)));

    $response = $this->getJson("/deny?from={$ips}");

    $response->assertUnprocessable()
        ->assertJsonValidationErrors('ips');
});

it('rejects IPv6 addresses', function () {
    $response = $this->getJson('/deny?from=::1');

    $response->assertUnprocessable()
        ->assertJsonValidationErrors('ips.0');
});
