<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_loggedOut_postsUrl()
    {
        $response = $this->get('/posts');

        $response->assertStatus(500); // no entries yet
    }
}
