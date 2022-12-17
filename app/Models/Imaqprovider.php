<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqprovider extends Model
{
    use HasFactory;

    protected $table = 'imaq_providers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'phone',
        'rfc',
        'address',
        'status',
    ];

    public function provider() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }


}
