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
        // DB::table('mpd_client_information')->insert([
        //     'client_id'=>9,
        //     'address'=>'Salvador Díaz Mirón #27',
        //     'city'=>'Cuauhtémoc',
        //     'postal_code'=>'06400',
        //     'phone'=>'5512403608',
        //     'orders'=>'1',
        //     'gasto_total'=>'1730.00',
        //     'vmp'=>'1730.00'
        // ] );

        DB::table('mpd_client_information')->insert(['user_id'=>9,'address'=>'--','city'=>'--','postal_code'=>'--','phone'=>'9211409174',]);



    }
}




