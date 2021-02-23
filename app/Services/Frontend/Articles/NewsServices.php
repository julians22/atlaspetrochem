<?php

namespace App\Services\Frontend\Articles;

use App\Models\Articles\News;
use App\Services\BaseService;

class NewsServices extends BaseService
{
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function getActiveThumbnail()
    {
        return $this->model->latest()->take(3)->get();
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
