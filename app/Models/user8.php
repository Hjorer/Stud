<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user8 extends Model
{
    public function thumbnail()
    {
        return $this->hasOne(profiles8::class);
    }
    use HasFactory;
}
