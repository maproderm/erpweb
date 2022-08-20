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
        $superadmin = User::create([
            'name'      => 'Adolfo',
            'last_name' => 'Superadmin',
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
        $provider->assignRole('proveedor');
    }
}
