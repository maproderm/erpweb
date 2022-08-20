<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_brands')->insert([
            'name'=>'Marca 1',
            'description'=>'Descripcion de marca 1'
        ] );

        DB::table('imaq_brands')->insert([
            'name'=>'Marca 2',
            'description'=>'Descripcion de marca 2'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Marca 3',
            'description'=>'Descripcion de marca 3'
        ] );
    }
}
