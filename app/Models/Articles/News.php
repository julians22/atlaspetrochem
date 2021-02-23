<?php

namespace App\Models\Articles;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasSlug, SoftDeletes;

    public $table = 'news';

    protected $fillable = [
        'title', 'value', 'slug', 'thumb_location', 'featured_image', 'intro'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
