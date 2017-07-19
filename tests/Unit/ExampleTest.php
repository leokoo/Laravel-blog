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
		$first = factory(Post::class)->create();

		$second = factory(Post::class)->create(
			'created_at' => \Carbon\Carbon::now()->subMonth()
		);
		// When I fetch the archives
		$post = Post::archives();
		// Then the response should in be in proper format (assertion)
		$this->assertCount(2, $post);
    }
}
