<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



    public function test_autenticarUsuario()
    {

        //$user = User::factory()->create();

        $response = $this->
        
        post(route('login'), ['email' => $user->email, 'password' => 'password']);

        
        $response->assertStatus(302);
        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
        


    }


}
