<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'status_id',
        'img',
        'price',
        'old_price',
        'hit',
        'sale',
        'qty',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function getImage()
    {
        if (!$this->img) {
            return asset('no-image.png');
        } else {
            return asset("storage/{$this->img}");
        }
    }
}
