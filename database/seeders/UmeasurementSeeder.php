<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UmeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Pieza'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Litro'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Caja'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Kilogramo'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Cuñete'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Metro'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Paquete'
        ] );
        DB::table('imaq_unit_of_measurement')->insert([
            'name'=>'Bulto'
        ] );
    }
}
