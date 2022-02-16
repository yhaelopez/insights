<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'j8c',
            'email' => 'contacto@juarezsoft.com.mx',
            'password' => Hash::make('Insights#55'),
            'email_verified_at' => now(),
        ]);
        User::create([
            'name' => 'Alberto Valero',
            'email' => 'alberto.valero@juarezsoft.com.mx',
            'password' => Hash::make('Insights#55'),
            'email_verified_at' => now(),
        ]);
        User::create([
            'name' => 'Adan Najera',
            'email' => 'adan.najera@juarezsoft.com.mx',
            'password' => Hash::make('Insights#55'),
            'email_verified_at' => now(),
        ]);
        $user = User::create([
            'name' => 'Yhael Lopez',
            'email' => 'yhael.lopez@juarezsoft.com.mx',
            'password' => Hash::make('Insights#55'),
            'email_verified_at' => now(),
        ]);

        $user->givePermissionTo(Permission::get()->pluck('name'));
        User::factory(10)->create();

    }
}
