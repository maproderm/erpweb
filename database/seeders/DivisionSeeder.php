<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('imaq_division')->insert([
            'name'=>'Almacén IMAQ'
        ] );

        // DB::table('division')->insert([
        //     'name'=>'Almacén MaProDerm'
        // ] );

        DB::table('imaq_division')->insert([
            'name'=>'Materia Prima'
        ] );

        DB::table('imaq_division')->insert([
            'name'=>'Producto Terminado'
        ] );
    }
}