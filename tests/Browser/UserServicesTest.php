<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Symfony\Component\Console\Input\Input;
use Tests\DuskTestCase;

class UserServicesTest extends DuskTestCase
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
            $browser->visit('/userServices')
                    ->assertSee('Marketplace')
                    ->assertSee('Sixerr');
        });
    }
}
