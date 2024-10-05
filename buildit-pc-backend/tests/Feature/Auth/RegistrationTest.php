<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

=======
>>>>>>> 246fd81c10994b5f6e33909b93601f0cd96445b7
    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
<<<<<<< HEAD
        $response->assertRedirect(route('dashboard', absolute: false));
=======
        $response->assertNoContent();
>>>>>>> 246fd81c10994b5f6e33909b93601f0cd96445b7
    }
}
