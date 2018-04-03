<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCustomTest()
    {
        $this->assertTrue(true);
    }

    public function testSecondCustomTest()
    {
        $this->assertTrue(true);
    }

    public function testFailTest()
    {
        $this->assertTrue(5 > 4);
    }
}
