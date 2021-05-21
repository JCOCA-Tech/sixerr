<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PostsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    use DatabaseMigrations;

    public function testLoggedOut()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/posts')
                    ->assertSee('Posts')
                    ->assertSee('Why')
                    ->assertSee('You')
                    ->assertSee("Don't");
        });
    }
}
