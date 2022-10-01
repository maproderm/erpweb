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
            'name'=>'MaProDerm',
            'type'=>1,
            'description'=>'Marca General de Productos locales'
        ] );

        DB::table('imaq_brands')->insert([
            'name'=>'Abisay Cosmetics',
            'type'=>2,
            'description'=>'Abisay Cosmetics'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Abraham Azamar',
            'type'=>2,
            'description'=>'Abraham Azamar'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Areli Monroy',
            'type'=>2,
            'description'=>'Areli Monroy'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'BG',
            'type'=>2,
            'description'=>'BG'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'By Flora',
            'type'=>2,
            'description'=>'By Flora'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Caro Isla',
            'type'=>2,
            'description'=>'Caro Isla'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Druida',
            'type'=>2,
            'description'=>'Druida'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Dulce Vega',
            'type'=>2,
            'description'=>'Dulce Vega'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Francis Start',
            'type'=>2,
            'description'=>'Francis Start'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Hijoleth',
            'type'=>2,
            'description'=>'Hijoleth'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Ishel Cosmetics',
            'type'=>2,
            'description'=>'Ishel Cosmetics'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'JP',
            'type'=>2,
            'description'=>'JP'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'JRE',
            'type'=>2,
            'description'=>'JRE'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Xavier Kuri',
            'type'=>2,
            'description'=>'Xavier Kuri'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Lady Tacos',
            'type'=>2,
            'description'=>'Lady Tacos'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Lupita Cabrera',
            'type'=>2,
            'description'=>'Lupita Cabrera'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Mlashes',
            'type'=>2,
            'description'=>'Mlashes'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Maphia',
            'type'=>2,
            'description'=>'Maphia'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Marsat',
            'type'=>2,
            'description'=>'Marsat'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Monroy Beauty',
            'type'=>2,
            'description'=>'Monroy Beauty'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Mushi',
            'type'=>2,
            'description'=>'Mushi'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Pamela Barrera',
            'type'=>2,
            'description'=>'Pamela Barrera'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Pepe Gutierrez',
            'type'=>2,
            'description'=>'Pepe Gutierrez'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Talina Salinas',
            'type'=>2,
            'description'=>'Talina Salinas'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Victor Guadarrama',
            'type'=>2,
            'description'=>'Victor Guadarrama'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Dermay',
            'type'=>2,
            'description'=>'Dermay'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'IMAQ',
            'type'=>2,
            'description'=>'IMAQ Industrial Maquiladora OSC'
        ] );
        DB::table('imaq_brands')->insert([
            'name'=>'Red',
            'type'=>3,
            'description'=>'Red'
        ] );
    }
}
