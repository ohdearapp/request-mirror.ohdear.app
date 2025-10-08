<?php

it('returns HTML document with no messages by default', function () {
    $response = $this->get('/console');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/html; charset=UTF-8');

    expect($response->content())
        ->toContain('<!DOCTYPE html>')
        ->toContain('Console Messages')
        ->toContain('No console messages');
});

it('includes console log message when provided', function () {
    $response = $this->get('/console?messages[0][type]=log&messages[0][message]=Hello World');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("Hello World")')
        ->toContain('Console messages will be logged');
});

it('includes multiple console messages of different types', function () {
    $response = $this->get('/console?messages[0][type]=log&messages[0][message]=Info message&messages[1][type]=error&messages[1][message]=Error message&messages[2][type]=warn&messages[2][message]=Warning message');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("Info message")')
        ->toContain('console.error("Error message")')
        ->toContain('console.warn("Warning message")');
});

it('supports all console message types', function () {
    $response = $this->get('/console?messages[0][type]=log&messages[0][message]=log&messages[1][type]=info&messages[1][message]=info&messages[2][type]=warn&messages[2][message]=warn&messages[3][type]=error&messages[3][message]=error&messages[4][type]=debug&messages[4][message]=debug');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("log")')
        ->toContain('console.info("info")')
        ->toContain('console.warn("warn")')
        ->toContain('console.error("error")')
        ->toContain('console.debug("debug")');
});

it('defaults to log type for invalid message types', function () {
    $response = $this->get('/console?messages[0][type]=invalid&messages[0][message]=test');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("test")');
});

it('handles empty message content', function () {
    $response = $this->get('/console?messages[0][type]=log&messages[0][message]=');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("")');
});

it('defaults to log type when type is missing', function () {
    $response = $this->get('/console?messages[0][message]=test message');

    $response->assertOk();

    expect($response->content())
        ->toContain('console.log("test message")');
});
