<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'name'=>'Alejandra',
            'last_name'=>'Briseño Tovar',
            'email'=>'aletovar87@gmail.com',
            'num_order'=>'1',
            'total'=>'999',
            'vmp'=>'999'
        ] );


    }
}




