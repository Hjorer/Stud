<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries8 extends Model
{
    public function cities(){
        return $this->hasMany(\App\Models\cities8::class,'country_id', 'id');
    }
    public function city(){
        return $this->hasMany(\App\Models\cities8a2::class,'country_id','id');
    }

    protected $table = 'countries8';
    use HasFactory;
}
