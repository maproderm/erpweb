<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $appends = ['translate_name'];

    // protected $appends = ['translate_name'];

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'created_at',
    ];

    public function scopeGetRoles($query,$name_filter,$sort,$fieldToSort){
        return $this->where(function($query) use ($name_filter){
            $query->where('name','LIKE','%'.$name_filter.'%');
        })->orderBy($fieldToSort,$sort)->get();
    }

    public function scopeGetAllRoles($query){
        return $this->all();
    }
    public function scopeGetRolById($query,$id){
        return $this->find($id);
    }

    public function getTranslateNameAttribute($value){
        switch ($this->name) {
            case 'superadmin':
                    $name = 'Superadministrador';
                break;
            case 'dealer':
                    $name = 'Distribuidor';
                break;
            case 'customer':
                    $name = 'Cliente';
                break;
            case 'seller':
                    $name = 'Ventas';
                break;
            default:
                    $name = $this->name;
                break;
        }
        return $name;
    }
}
