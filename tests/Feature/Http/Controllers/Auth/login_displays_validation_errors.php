<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class login_displays_validation_errors extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /** @test */

    public function login_displays_validation_errors()
    {
        $response = $this->post('/login', []);
     
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }
}
