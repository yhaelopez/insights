<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'j8c',
            'email' => 'dev@j8c.com.mx',
            'password' => Hash::make('Insights#55'),
            'email_verified_at' => now(),
        ]);
        User::factory(10)->create();

    }
}
