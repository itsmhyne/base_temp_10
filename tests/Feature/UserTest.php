<?php

namespace Tests\Feature;

use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    public function testAuth()
    {
        $this->seed(UserSeeder::class);

        $success = Auth::attempt([
            "email" => "mhamdanydev@gmail.com",
            "password" => "password"
        ], true);

        self::assertTrue($success);

        $user = Auth::user();

        self::assertNotNull($user);
        self::assertEquals("mhamdanydev@gmail.com", $user->email);
    }
}
