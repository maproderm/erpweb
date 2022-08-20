<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TmaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Metal'
        ] );
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Plástico'
        ] );
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Madera'
        ] );
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Unicel'
        ] );
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Papel'
        ] );
        DB::table('imaq_type_of_material')->insert([
            'name'=>'Vidrio'
        ] );
    }
}
