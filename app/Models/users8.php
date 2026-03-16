<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users8 extends Model
{
    protected $table = 'users8';
    public function profiles8()
    {
        return $this->hasOne(\App\Models\profiles8::class,'user_id','id');
    }
     protected $guarded = []; 
    public function profiles()
    {
        return $this->hasMany(profiles8::class, 'user_id','id');
    }
    use HasFactory;
}