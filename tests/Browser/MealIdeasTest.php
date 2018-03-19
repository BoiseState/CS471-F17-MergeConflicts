<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MealIdeasTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        echo "\nTesting MealIdeas route\n";
        $this->browse(function (Browser $browser) {
            $browser->visit('/meal-ideas')
                    ->assertSee('idea');
        });
        echo "Done\n";
    }
}
