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
            'name'      => 'Imaq',
            'last_name' => 'Industrial Maquiladora',
            'email'     => 'contacto@industrialmaquiladora.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $provider->assignRole('provider');

        $provider_second = User::create([
            'name'      => 'Proveedor',
            'last_name' => 'Prueba',
            'email'     => 'proveedor@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $provider_second->assignRole('provider');

        $sales = User::create([
            'name'      => 'Ventas',
            'last_name' => 'Maproderm',
            'email'     => 'ventas@mail.com',
            'password'  => Hash::make('Superadmin2022'),
        ]);
        $sales->assignRole('sales');

        $almacenmapro = User::create([
            'name'      => 'Almacen',
            'last_name' => 'Maproderm',
            'email'     => 'almacen@maproderm.com',
            'password'  => Hash::make('Almacenmpd2022'),
        ]);
        $almacenmapro->assignRole('almacenmapro');
    }
}
