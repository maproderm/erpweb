<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpdclient extends Model
{
    use HasFactory;

    protected $table = 'mpd_client_information';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'client_id',
        'address',
        'city',
        'postal_code',
        'phone',
        'orders',
        'gasto_total',
        'vmp',
    ];

    public function client() {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }


}
