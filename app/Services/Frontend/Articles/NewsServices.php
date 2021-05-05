<?php

namespace App\Services\Frontend\Articles;

use App\Models\Articles\News;
use App\Models\Thumbnails\NewsThumbnail;
use App\Services\BaseService;

class NewsServices extends BaseService
{
    protected $newsThumbnail;
    public function __construct(News $model, NewsThumbnail $newsThumbnail)
    {
        $this->model = $model;
        $this->newsThumbnail = $newsThumbnail;
    }

    public function getActiveThumbnail($column = 'sort', $sort = 'asc')
    {
        return $this->newsThumbnail->orderBy($column, $sort)->take(3)->get();
    }

    public function getDefaultNewsThumnail()
    {
        return $this->model->latest()->take(3)->get();
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
