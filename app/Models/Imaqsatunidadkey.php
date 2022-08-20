<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqsatunidadkey extends Model
{
    use HasFactory;

    protected $table = 'imaq_sat_key_u';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'type',
        'key',
    ];
}
