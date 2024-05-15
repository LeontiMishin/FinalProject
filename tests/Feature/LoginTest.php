<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;


class LoginTest extends TestCase
{

    /** @test */
    public function testUserLoginWithCorrectCredentials()
{
    
    $user = User::firstOrCreate([
        'email' => 'leonti.gold@gmail.com'
    ], [
        'name' => 'Leonti Mishin',
        'email_verified_at' => now(),
        'password' => bcrypt('qwertyui'),
        'remember_token' => Str::random(10),
    ]);

    $this->actingAs($user);

    $response = $this->post('/login', [
        'email' => 'leonti.gold@gmail.com',
        'password' => 'qwertyui',
    ]);

    $response->assertRedirect('/main');
    $this->assertAuthenticatedAs($user);
}
}
