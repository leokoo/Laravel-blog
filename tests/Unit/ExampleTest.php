<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
		// Given I have two records in the database that are posts and are one month apart
		$first = factory(Post::class)->create();

		$second = factory(Post::class)->create([
				'created_at' => \Carbon\Carbon::now()->subMonth()
		]);
		// When I fetch the archives
		$post = Post::archives();

		// Then the response should in be in proper format (assertion)
		$this->assertEquals([
			[
				"year" => $first->created_at->format('Y'),
				"month" => $first->created_at->format('F'),
				"published" => 1
			],
			[
				"year" => $second->created_at->format('Y'),
				"month" => $second->created_at->format('F'),
				"published" => 1
			]
		], $post);
    }
}
