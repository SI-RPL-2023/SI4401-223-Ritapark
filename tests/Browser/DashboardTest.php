<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testAdminDashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('.email', 'admin@gmail.com')
                ->type('.password', '12345678')
                ->press('Login')
                ->assertPathIs('/admin')
                ->assertSee('Dashboard') // Verify that the dashboard page is displayed
                ->assertSee('Penjualan')
                ->click('.dropdown-toggle')
                ->click('a[href="' . route('adm.dashboard', ['periode' => 'bulan_lalu']) . '"]')
                ->assertSee('Total Pendapatan')
                ->assertSee('Total Rating')
                ->assertSee('Wahana Favorit')
                ->assertSee('Roller Coaster')
                ->assertSee('Bianglala')
                ->assertSee('Kora Kora')
                ->assertSee('Skydrop');
        });
    }
}
