<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;

class NavigationTest extends TestCase
{

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::firstOrCreate([
            'email' => 'leonti.gold@gmail.com'
        ], [
            'name' => 'Leonti Mishin',
            'email_verified_at' => now(),
            'password' => bcrypt('qwertyui'),
            'remember_token' => Str::random(10),
        ]);
    }

    /** @test */
    public function user_can_view_main_page_after_login()
    {
        $this->actingAs($this->user);

        $response = $this->get('/main');
        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_view_e_parking_page_after_login()
    {
        $this->actingAs($this->user);

        $response = $this->get('/e-parking');
        $response->assertStatus(200);

    }
}
