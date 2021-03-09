<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => Hash::make("testpassword")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }
}
