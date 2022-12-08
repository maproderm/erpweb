<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mpd_sale_details')->insert([
        //     'sale_id'=>10,
        //     'product_id'=>1,
        //     'quantity'=>10,
        //     'price'=>6,
        //     'subtotal'=>2220,
        //     'total'=>2220,
        // ]);

        DB::table('mpd_sale_details')->insert(['sale_id'=>1,'product_id'=>122,'quantity'=>1,'price'=>490,'subtotal'=>490,'total'=>490,]);
    }
}
