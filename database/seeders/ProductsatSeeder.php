<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_clase')->insert([
            'name'=>'Cosméticos',
            'key'=>'53131619',
            'sat_group_id'=>1,
            'status'=>1
        ] );
        DB::table('sat_clase')->insert([
            'name'=>'Bisutería',
            'key'=>'54101600',
            'sat_group_id'=>1,
            'status'=>1
        ] );
        DB::table('sat_clase')->insert([
            'name'=>'Esmalte para uñas',
            'key'=>'53131638',
            'sat_group_id'=>1,
            'status'=>1
        ] );
        DB::table('sat_clase')->insert([
            'name'=>'Removedor de esmalte',
            'key'=>'53131640',
            'sat_group_id'=>1,
            'status'=>1
        ] );
        DB::table('sat_clase')->insert([
            'name'=>'Implementos para la manicure',
            'key'=>'53131617',
            'sat_group_id'=>1,
            'status'=>1
        ] );
    }
}
