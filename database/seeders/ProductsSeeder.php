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
            'stock_inventory'=>'100',
            'division_id'=>3,
            'category_id'=>5,
            'sku_product_inventory'=>'1',
            'provider_id'=>5,
            'brand_id'=>1,
            'unit_of_measurement_id'=>1,
            'size_product_inventory'=>1,
            'key_sat_unit_inventory'=>1,
            'key_sat_product_inventory'=>1,
            'minimum_inventory'=>'20',
            'price_product_inventory'=>150,
            'description_product_inventory'=>'Pigmento mineral puro. Este producto puede ser utilizado como sombra, delineador, esmalte o labial. También lo puedes mezclar con otros pigmentos para obtener una gama infinita de colores y estilos.',
            'status'=>0,
        ] );
    }
}
