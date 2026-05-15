<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'model',
        'seat_count',
    ];

    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }
}
