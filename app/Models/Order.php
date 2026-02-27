<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'order_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function uniqueIds(): array
    {
        return ['order_id'];
    }
    protected $fillable = [
        'order',
    ];
    /* protected $guarded = []; */
    protected $hidden = [
        'created_at',
        'updated_at',
        'order_id',
    ];
}
