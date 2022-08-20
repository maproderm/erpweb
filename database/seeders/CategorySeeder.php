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
            'status'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Categoria 2',
            'status'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Categoria 3',
            'status'=>'1'
        ] );
    }
}
