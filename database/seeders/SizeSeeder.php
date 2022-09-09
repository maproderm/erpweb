<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_size')->insert([
            'name'=>'Pequeño'
        ] );
        DB::table('imaq_size')->insert([
            'name'=>'Mediano'
        ] );
        DB::table('imaq_size')->insert([
            'name'=>'Grande'
        ] );
    }
}
