<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_product_inventory',
        'productor',
        'artista',
        'ciudad',
        'hotel',
        'registro',
        'fecha_inicio',
        'fecha_fin',
        'status'
    ];
}
