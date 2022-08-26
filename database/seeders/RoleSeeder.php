<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleDeveloper      = Role::create(['name' => 'developer']);
        $roleSuperadmin     = Role::create(['name' => 'superadmin']);
        $roleProduccion     = Role::create(['name' => 'production']);
        $roleAlmacen        = Role::create(['name' => 'almacenimaq']);
        $roleAlmacen2       = Role::create(['name' => 'almacenmapro']);
        $roleSerigrafia      = Role::create(['name' => 'serigrafia']);
        $roleLaboratorio    = Role::create(['name' => 'laboratorio']);
        $roleDisenio        = Role::create(['name' => 'disenio']);
        $roleVentas         = Role::create(['name' => 'sales']);
        $roleEmployee       = Role::create(['name' => 'employee']);
        $roleVendedor       = Role::create(['name' => 'vendedorevento']);
        $roleCustomer       = Role::create(['name' => 'customer']);
        $roleAcondicionado  = Role::create(['name' => 'acondicionado']);
        $roleDistribuidor   = Role::create(['name' => 'distribuidor']);
        $roleProveedor      = Role::create(['name' => 'provider']);
        $roleChofer         = Role::create(['name' => 'driver']);
        $roleProyector      = Role::create(['name' => 'proyector']); //Este rol se utilizara para proyectar graficas en pantallas
        $roleGuest          = Role::create(['name' => 'guest']);
    }
}
