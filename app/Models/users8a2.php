<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users8a2 extends Model
{
    public function position(){
        return $this->belongsTo(\App\Models\position8::class,'position_id', 'id');
    }
    public function ucity(){
        return $this->belongsTo(\App\Models\cities8::class,'city_id', 'id');
    }
    public function roles()
{
    return $this->belongsToMany(roles::class,'rolesusersid', 'user_id',      'roles_id'      );
}    protected $table = 'users8a2s';
    use HasFactory;
}
