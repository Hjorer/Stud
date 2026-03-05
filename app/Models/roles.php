<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $casts = [
    'name' => 'array',
];
    protected $table ='roles';
    public function users(){
        return $this->belongsToMany(\App\Models\users8a2::class, 'rolesusersid', 'roles_id', 'user_id');
    }
    use HasFactory;
}
