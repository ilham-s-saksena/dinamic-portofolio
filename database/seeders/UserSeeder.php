<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ilham',
            'email' => 'ilham@mail.com',
            'password' => Hash::make("123"),
            'email_verified_at' => now(),
            'role' => 'admin'
        ]);
    }
}
