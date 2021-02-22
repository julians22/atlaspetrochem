<?php

namespace App\Models\Articles;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    use SoftDeletes, HasSlug;

    public $table = 'galeries';

    protected $fillable = [
        'title', 'thumbnail_location', 'image_location', 'video_url'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
