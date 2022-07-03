<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example for the application
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
