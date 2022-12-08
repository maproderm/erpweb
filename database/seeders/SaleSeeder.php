<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mpd_sales')->insert([
        //     'client_id'=>10,
        //     'user_id'=>1,
        //     'num_order'=>'1043',
        //     'items'=>6,
        //     'subtotal'=>2220,
        //     'discount'=>0,
        //     'shipping'=>0,
        //     'total'=>2220,
        //     'status'=>3,
        //     'payment'=>1,
        // ]);

        DB::table('mpd_sales')->insert(['user_id'=>9,'employee_id'=>7,'num_order'=>'7','items'=>1,'subtotal'=>490,'discount'=>0,'shipping'=>0,'total'=>490,'status'=>3,'payment'=>1,]);

    }
}
