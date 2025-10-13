<?php

it('displays the form page', function () {
    $response = $this->get('/form');

    $response->assertOk()
        ->assertViewIs('form')
        ->assertSee('Name')
        ->assertSee('Email')
        ->assertSee('Submit Form');
});

it('validates name is required', function () {
    $response = $this->post('/form', [
        'email' => 'test@example.com',
    ]);

    $response->assertSessionHasErrors('name');
});

it('validates email is required', function () {
    $response = $this->post('/form', [
        'name' => 'John Doe',
    ]);

    $response->assertSessionHasErrors('email');
});

it('validates email format', function () {
    $response = $this->post('/form', [
        'name' => 'John Doe',
        'email' => 'invalid-email',
    ]);

    $response->assertSessionHasErrors('email');
});

it('successfully submits form with valid data', function () {
    $response = $this->post('/form', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'terms' => '1',
    ]);

    $response->assertRedirect(route('form.show'))
        ->assertSessionHas('success', 'Thank you for your submission!');
});

it('redirects back with validation errors and old input', function () {
    $response = $this->post('/form', [
        'name' => '',
        'email' => 'invalid',
    ]);

    $response->assertSessionHasErrors(['name', 'email'])
        ->assertRedirect();

    $response = $this->get('/form');
    $response->assertOk();
});

it('displays success message after successful submission', function () {
    $this->post('/form', [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'terms' => '1',
    ]);

    $response = $this->get('/form');

    $response->assertOk()
        ->assertSee('Thank you for your submission!');
});
