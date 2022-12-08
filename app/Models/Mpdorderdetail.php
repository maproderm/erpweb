<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mpdorder;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mpdorderdetail extends Model
{
    use HasFactory;

    protected $table = 'mpd_sale_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'sale_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];

    public function order()
    {
        return $this->belongsTo(Mpdorder::class);
    }

    public function product()
    {
        return $this->belongsTo(Inventory::class);
    }


}
