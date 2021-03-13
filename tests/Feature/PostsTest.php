<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
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
    public function test_posts_id_get_request(){
    	$response = $this->get('/posts/2');

        $response->assertStatus(200);

    }
    public function test_get_unexisted_posts(){
    	$response = $this->get('/posts/10000');

        $response->assertStatus(404);
    }

    public function test_posts_response(){
    	$response = $this->get('/posts/2');
    	$response->assertViewHas('post');
    }
}
