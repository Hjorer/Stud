<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities8a2 extends Model
{
    public function country(){
        return $this->belongsTo(\App\Models\countries8::class,'country_id', 'id');
    }
    protected $table = 'cities8a2';
    use HasFactory;
}
