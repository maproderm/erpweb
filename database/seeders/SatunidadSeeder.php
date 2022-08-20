<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SatunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Pieza',
            'type'=>'Multiplos/Fracciones/Decimales',
            'key'=>'H87'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Litro',
            'type'=>'Tiempo y espacio',
            'key'=>'LTR'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Caja',
            'type'=>'Unidad de empaque',
            'key'=>'XBX'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Kilogramo',
            'type'=>'Mecánica',
            'key'=>'KGM'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Metro',
            'type'=>'Tiempo y espacio',
            'key'=>'MTR'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Paquete',
            'type'=>'Unidad de empaque',
            'key'=>'XPK'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Paquete a granel',
            'type'=>'Diversos',
            'key'=>'AB'
        ] );
        DB::table('imaq_sat_key_u')->insert([
            'name'=>'Lote',
            'type'=>'Unidad de empaque',
            'key'=>'XLT'
        ] );
    }
}
