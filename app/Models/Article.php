<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Article extends Model
{
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? ucwords($value) : '',
            set: fn(?string $value) => $value ? strip_tags(trim($value)) : null,
        );
    }
    protected function body(): Attribute
    {
        return Attribute::make(
            set: fn(?string $value) => trim($value ?? ''),
        );
    }
    public function PublishedScope($query)
    {
        return $query->whereNotNull('published_at');
    }
    use HasFactory;
    protected $table = 'blog_articles';
    protected $guarded = ['views_count'];
}
