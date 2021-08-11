<?php

namespace App\Services\Frontend\Articles;

use App\Exceptions\GeneralException;
use App\Models\Articles\News;
use App\Models\Thumbnails\NewsThumbnail;
use App\Services\BaseService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
        $locale = config('app.locale');
        $fallbackLocale = Arr::flatten(Arr::except(list_locale(), $locale));
        if ($this->model->where('slug->'.$locale, $slug)->first()) {
            return $this->model->where('slug->'.$locale, $slug)->first();
        }elseif($this->model->where('slug->'.$fallbackLocale[0], $slug)->first()){
            return $this->model->where('slug->'.$fallbackLocale[0], $slug)->first();
        }else{
            throw new GeneralException('Something wrong when showing news');
        }
    }
}
