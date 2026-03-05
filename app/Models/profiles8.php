<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles8 extends Model
{
    public function users(){
        return $this->belongsTo(\App\Models\users8::class,'id');
    }
    protected $table = 'profiles8';
    use HasFactory;
}
