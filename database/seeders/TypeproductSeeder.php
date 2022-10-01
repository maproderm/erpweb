<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mpd_type_product')->insert([
            'name'=>'Venta MaProDerm',
        ] );

        DB::table('mpd_type_product')->insert([
            'name'=>'Maquila',
        ] );
    }
}
