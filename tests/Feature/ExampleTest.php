<?php

namespace Tests\Feature;

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends BrowserKitTestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Carlos',
            'email' => 'cmabris@gmail.com',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Carlos');
    }
}
