<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class BasicHTTPTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testLoginPage()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testRegisterPage()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testPasswordResetPage()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
    }

    // This page requires authenticated user
    public function testAppPage()
    {
        $response = $this->get('/app');
        $response->assertStatus(302);
    }
    
    // This page requires authenticated user
    public function testPanelPage()
    {
        $response = $this->get('/panel');
        $response->assertStatus(302);
    }


}
