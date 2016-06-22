<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        //1. Visit The Home Page
             $this->visit('/');
        #2. Press a 'Click Me' Button
             $this->click('Click Me');
        //3. See "Wish the concert was dinosaurs"
             $this->see("Wish the concert was dinosaurs");
        // 4. Assert that the current URL is /dinosaurs
             $this->seePageIs('/dinosaurs');
    }
}
