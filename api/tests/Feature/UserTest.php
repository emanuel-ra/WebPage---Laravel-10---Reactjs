<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class UserTest extends TestCase
{   
    /*
     * TEST FOR SUCCESS LOGIN OF THE USER 
     * 
     *  @return void
    */
    public function test_user_route_login(): void
    {      
        $baseUrl = '/api/v1/auth/login';     
        $email = "ward.ciara@example.net";
        $password = "password";
       
        $response = $this->json('POST', $baseUrl . '/', [
            'email' => $email,
            'password' => $password
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token', 'token_type', 'expires_in'
            ]);
    }

    /*
     * TEST FOR SUCCESS LOGIN OF THE USER 
     * 
     * @return void
     */
    public function test_wrong_password_user_route_login(): void
    {      
        $baseUrl = '/api/v1/auth/login';     
        $email = "ward.ciara@example.net";
        $password = "abcd";
       
        $response = $this->json('POST', $baseUrl . '/', [
            'email' => $email,
            'password' => $password
        ]);

        $response
            ->assertStatus(401)
            ->assertJsonStructure([
                'error'
            ]);
    }
    /*
     * TEST FOR SUCCESS LOGIN OF THE USER 
     * 
     * @return void
     */
    public function test_wrong_email_user_route_login(): void
    {      
        $baseUrl = '/api/v1/auth/login';     
        $email = "wrong-mail.ciara@example.net";
        $password = "password";
       
        $response = $this->json('POST', $baseUrl . '/', [
            'email' => $email,
            'password' => $password
        ]);

        $response
            ->assertStatus(401)
            ->assertJsonStructure([
                'error'
            ]);
    }
    /*
     * TEST FOR SUCCESS LOGIN OF THE USER 
     * 
     * @return void
     */
    public function test_empty_values_user_route_login(): void
    {      
        $baseUrl = '/api/v1/auth/login';     
        $email = "";
        $password = "";
       
        $response = $this->json('POST', $baseUrl . '/', [
            'email' => $email,
            'password' => $password
        ]);

        $response
            ->assertStatus(401)
            ->assertJsonStructure([
                'error'
            ]);
    }
}
