<?php

namespace App\Models\Articles;

use App\Models\Thumbnails\NewsThumbnail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use SoftDeletes, HasTranslations, HasSlug;

    public $table = 'news';

    public $translatable = ['title', 'value', 'intro'];

    protected $fillable = [
        'title', 'value', 'slug', 'thumb_location', 'featured_image', 'intro'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the newsThumb associated with the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function newsThumb(): HasOne
    {
        return $this->hasOne(NewsThumbnail::class, 'news_id', 'id');
    }
}
