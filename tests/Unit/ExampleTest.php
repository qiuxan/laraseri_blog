<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

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
//        $this->assertTrue(true);

        $first=factory(Post::class)->create();

        $second=factory(Post::class)->create(

            ['created_at'=>\Carbon\Carbon::now()->subMonth()

            ]);
       $posts=Post::archives();

      // dd($posts);

       //$this->assertCount(2,$posts);

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

            ],$posts);
    }
}
