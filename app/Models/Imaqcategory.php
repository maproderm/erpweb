<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqcategory extends Model
{
    use HasFactory;

    protected $table = 'imaq_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'status',
        'division_id',
    ];

    public function division() {
        return $this->belongsTo('App\Models\Imaqdivision', 'division_id', 'id');
    }
}
