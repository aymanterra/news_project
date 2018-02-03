<?php

namespace Tests\Unit;

use App\News;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testapprovedNewsTest()
    {	
    	// create a news and it's status will be Waiting by default
    	$News1 = factory(News::class)->create();

    	// create a news and it's status will be changed to Approved
    	$News2 = factory(News::class)->create([
    		'status_id' => '2',
    	]);

    	// run approved method
    	$approvedNews = News::approved();

    	// Assertion
        $this->assertCount(1, $approvedNews);

        $News1->delete();
        $News2->delete();
    }
}
