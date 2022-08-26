<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $developer = User::create([
            'name'      => 'Adolfo',
            'last_name' => 'Superadmin',
            'email'     => 'adolfo@nixdit.com',
            'password'  => Hash::make('Developer.imaq'),
        ]);
        $developer->assignRole('developer');

        $superadmin = User::create([
            'name'      => 'Industrial',
            'last_name' => 'Maquiladora',
            'email'     => 'superadmin@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $superadmin->assignRole('superadmin');

        $almacen = User::create([
            'name'      => 'Almacen',
            'last_name' => 'Superadmin',
            'email'     => 'almacen@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $almacen->assignRole('almacenimaq');

        $serigrafia = User::create([
            'name'      => 'Serigrafia',
            'last_name' => 'Superadmin',
            'email'     => 'serigrafia@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $serigrafia->assignRole('serigrafia');

        $provider = User::create([
            'name'      => 'Proveedor',
            'last_name' => 'Prueba',
            'email'     => 'proveedor@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $provider->assignRole('provider');
    }
}
