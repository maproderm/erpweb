<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_categories')->insert([
            'name'=>'Categoria 1',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Categoria 2',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Categoria 3',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Skin Care',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Ojos',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Rostro',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Labios',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Corporal & Cabello',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Herramientas & Acesorios',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Linea FX',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Palettes',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Kit',
            'status'=>'1',
            'division_id'=>'3'
        ] );
    }
}
