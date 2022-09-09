<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_inventory')->insert([
            'name_product_inventory'=>'Pigmento Mineral 1',
            'stock_inventory'=>'125',
            'division_id'=>1,
            'category_id'=>1,
            'level_area_id'=>1,
            'sku_product_inventory'=>'1',
            'provider_id'=>1,
            'brand_id'=>1,
            'unit_of_measurement_id'=>1,
            'size_product_inventory'=>1,
            'type_of_material_id'=>1,
            'key_sat_unit_inventory'=>1,
            'key_sat_product_inventory'=>1,
            'minimum_inventory'=>'20',
            'price_product_inventory'=>150,
            'description_product_inventory'=>'Este es la descripcion del producto',
            'status'=>0,
        ] );
    }
}
