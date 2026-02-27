<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function PublishedScope($query){
        return $query->whereNotNull('published_at');
    }
    use HasFactory;
    protected $table = 'blog_articles';
    protected $guarded = ['views_count'];
}
