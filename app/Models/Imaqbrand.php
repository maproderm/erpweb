<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqbrand extends Model
{
    use HasFactory;

    protected $table = 'imaq_brands';

    protected $fillable = [
        'id',
        'name',
        'type',
        'description',
    ];







}
