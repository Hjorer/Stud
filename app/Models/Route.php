<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_number',
        'start_stop',
        'end_stop',
        'ticket_price',
    ];

    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }
}
