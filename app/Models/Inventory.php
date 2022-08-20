<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'imaq_inventory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_product_inventory',
        'amount_product_inventory',
        'division_id',
        'category_id',
        'location_product_inventory',
        'sku_product_inventory',
        'barcode_product_inventory',
        'provider_id',
        'brand_id',
        'unit_of_measurement_id',
        'size_product_inventory',
        'type_of_material_id',
        'key_sat_unit_inventory',
        'key_sat_product_inventory',
        'minimum_inventory',
        'unit_cost_inventory',
        'suggested_sale_inventory',
        'price_product_inventory',
        'description_product_inventory',
        'status'
    ];

    public function division() {
        return $this->belongsTo('App\Models\Imaqdivision', 'division_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Models\Imaqcategory', 'category_id', 'id');
    }

    public function provider() {
        return $this->belongsTo('App\Models\Imaqprovider', 'provider_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function brand() {
        return $this->belongsTo('App\Models\Imaqbrand', 'brand_id', 'id');
    }

    public function umedida() {
        return $this->belongsTo('App\Models\Imaqumedida', 'unit_of_measurement_id', 'id');
    }

    public function typematerial() {
        return $this->belongsTo('App\Models\Imaqtypematerial', 'type_of_material_id', 'id');
    }

    public function satkeyunidad() {
        return $this->belongsTo('App\Models\Imaqsatunidadkey', 'key_sat_unit_inventory', 'id');
    }

}
