<?php

namespace App\Models\Thumbnails;

use App\Models\Articles\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;


class NewsThumbnail extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'sort',
        'sort_when_creating' => true,
    ];

    public $fillable = ['news_id', 'sort'];

    public $timestamps = false;

    /**
     * Get the news associated with the NewsThumbnail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function news(): HasOne
    {
        return $this->hasOne(News::class, 'id', 'news_id');
    }

    public function getTitleAttribute($value)
    {
        return $this->news->title;
    }
    public function getSlugAttribute($value)
    {
        return $this->news->slug;
    }
    public function getIntroAttribute($value)
    {
        return $this->news->intro;
    }

    public function getThumbLocationAttribute($value)
    {
        return $this->news->thumb_location;
    }
}
