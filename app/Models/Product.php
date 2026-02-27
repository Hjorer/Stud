<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function scopeActive($query){
        return $query->where('is_active','=',true);
    }
    public function scopeExpensive($query){
        return $query->orderBy('price','desc');
    }
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'updated_at', 
        'created_at',
    ];
}
