<?php

namespace App\Models\Articles;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasSlug;

    public $table = 'news';

    protected $fillable = [
        'title', 'value', 'slug', 'thumb_location', 'featured_image'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
