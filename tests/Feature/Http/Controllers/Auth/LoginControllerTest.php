<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));
     
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }
}
