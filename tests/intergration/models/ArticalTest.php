<?php
use App\Article;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ArticalTest extends TestCase
{

	use DatabaseTransactions;
	/** @test */

	function it_fetches_trending_articles()
	{


		//Given
		//creating 3 articles with this line
		factory(Article::class, 3)->create();
		//setting the reads for these artciles to 10
		factory(Article::class)->create(['reads'=>10]);

		$mostPopular = factory(Article::class)->create(['reads'=>20]);
		//When
		$articles = Article::trending();
		//Then
		$this->assertEquals($mostPopular->id, $articles->first()->id);
		$this->assertCount(3, $articles);
	}
}