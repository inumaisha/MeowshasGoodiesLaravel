<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class login_authenticates_and_redirects_user extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   /** @test */
public function login_authenticates_and_redirects_user()
{
    $name = $this->faker->name;
    $email = $this->faker->safeEmail;
    $password = $this->faker->password(8);
 
    $response = $this->post('register', [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'password_confirmation' => $password,
    ]);
 
    $response->assertRedirect(route('home'));
 
    $user = User::where('email', $email)->where('name', $name)->first();
    $this->assertNotNull($user);
 
    $this->assertAuthenticatedAs($user);
}
}
