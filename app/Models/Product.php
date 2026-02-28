<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeActive($query)
    {
        return $query->where('is_active', '=', true);
    }
    public function scopeExpensive($query)
    {
        return $query->orderBy('price', 'desc');
    }
    protected $fillable = ['name', 'price', 'is_active', 'options'];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'options' => 'array',
    ];
    use HasFactory;
    /* protected $fillable = [
        'name',
        'price',
        'quantity',
        'updated_at',
        'created_at',
    ]; */
}
