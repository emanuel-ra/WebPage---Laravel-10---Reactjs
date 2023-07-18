<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_route_login(): void
    {
        //$response = $this->post('/api/v1/auth/login');
        
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/api/v1/auth/login', ['email' => 'kaelyn.berge@example.org','password'=>'password']);

        $response->assertStatus(200);
    }
}
