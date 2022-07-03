<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example for the application
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get("/");

        $response->assertStatus(200);
    }
}
