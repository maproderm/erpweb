<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqsize extends Model
{
    use HasFactory;

    protected $table = 'imaq_size';

    protected $fillable = [
        'id',
        'name',
        'type',
        'key',
    ];
}
