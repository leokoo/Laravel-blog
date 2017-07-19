<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
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
		// Given I have two records in the database that are posts and are one month apart
		// When I fetch the archives
		Post::archives();
		// Then the response should in be in proper format (assertion)
    }
}
