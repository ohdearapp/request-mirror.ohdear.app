<?php

it('correctly returns query parameters in args key', function () {
    $response = $this->post('/post?foo=bar&test=123&array[]=1&array[]=2');

    $response->assertOk()
        ->assertJson([
            'args' => [
                'foo' => 'bar',
                'test' => '123',
                'array' => ['1', '2'],
            ],
        ]);
});

it('returns empty args when no query parameters are provided', function () {
    $response = $this->post('/post');

    $response->assertOk()
        ->assertJson([
            'args' => [],
        ]);
});

it('correctly returns URL-encoded form data in data key', function () {
    $response = $this->post('/post', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);

    $data = $response->json('data');
    expect($data)->toContain('name=John+Doe');
    expect($data)->toContain('email=john%40example.com');
});

it('correctly returns JSON payload in data key', function () {
    $payload = ['user' => 'test', 'active' => true];

    $response = $this->postJson('/post', $payload);

    expect($response->json('data'))->toBe(json_encode($payload));
});

it('correctly returns raw text content in data key', function () {
    $rawContent = 'raw text content';

    $response = $this->call('POST', '/post', [], [], [], [
        'CONTENT_TYPE' => 'text/plain',
    ], $rawContent);

    expect($response->json('data'))->toBe($rawContent);
});

it('always returns empty array for files key', function () {
    $response = $this->post('/post', ['field' => 'value']);

    $response->assertOk()
        ->assertJson([
            'files' => [],
        ]);
});

it('correctly returns form data in form key', function () {
    $formData = [
        'username' => 'testuser',
        'password' => 'secret123',
        'remember' => 'on',
    ];

    $response = $this->post('/post', $formData);

    $response->assertOk()
        ->assertJson([
            'form' => $formData,
        ]);
});

it('excludes _token from form data', function () {
    $response = $this->post('/post', [
        'name' => 'John',
        '_token' => 'fake-token',
    ]);

    $response->assertOk()
        ->assertJson([
            'form' => [
                'name' => 'John',
            ],
        ]);

    expect($response->json('form'))->not->toHaveKey('_token');
});

it('returns empty form key for JSON requests', function () {
    $response = $this->postJson('/post', ['data' => 'test']);

    $response->assertOk()
        ->assertJson([
            'form' => [],
        ]);
});

it('correctly returns request headers in headers key', function () {
    $response = $this->withHeaders([
        'X-Custom-Header' => 'custom-value',
        'User-Agent' => 'Test-Agent/1.0',
    ])->post('/post');

    $headers = $response->json('headers');

    expect($headers)->toBeArray();
    expect($headers)->toHaveKey('x-custom-header', 'custom-value');
    expect($headers)->toHaveKey('user-agent', 'Test-Agent/1.0');
});

it('correctly parses valid JSON payload in json key', function () {
    $jsonData = [
        'nested' => [
            'key' => 'value',
            'number' => 42,
        ],
        'boolean' => true,
    ];

    $response = $this->postJson('/post', $jsonData);

    $response->assertOk()
        ->assertJson([
            'json' => $jsonData,
        ]);
});

it('returns empty json key for non-JSON requests', function () {
    $response = $this->post('/post', ['form' => 'data']);

    $response->assertOk()
        ->assertJson([
            'json' => [],
        ]);
});

it('returns empty json key when JSON content is invalid', function () {
    $response = $this->call('POST', '/post', [], [], [], [
        'CONTENT_TYPE' => 'application/json',
    ], '{invalid json');

    $response->assertOk()
        ->assertJson([
            'json' => [],
        ]);
});

it('correctly returns POST in method key', function () {
    $response = $this->post('/post');

    $response->assertOk()
        ->assertJson([
            'method' => 'POST',
        ]);
});

it('correctly returns client IP address in origin key', function () {
    $response = $this->post('/post');

    $origin = $response->json('origin');
    expect($origin)->toBeString();
    expect($origin)->not->toBeEmpty();
});

it('correctly returns full request URL in url key', function () {
    $response = $this->post('/post?param=value');

    $url = $response->json('url');
    expect($url)->toContain('/post?param=value');
    expect($url)->toContain('http');
});