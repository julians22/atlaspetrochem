<?php

namespace App\Services\Backend\Articles;

use App\Exceptions\GeneralException;
use App\Models\Articles\News;
use App\Services\BaseService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class NewsServices extends BaseService
{
    /**
     * NewsServices Constructor
     * * @param News $model
     */
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function getActivePaginated($paged = 5, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model->orderBy($orderBy, $sort)->paginate($paged);
    }

    public function create(array $data): News
    {
        return DB::transaction(function () use ($data){
            $news = $this->model::create($data);

            if ($news) {
                return $news;
            }

            throw new GeneralException('Something wrong when creating news');
        });
    }

    public function update(News $news, array $data): News
    {
        return DB::transaction(function () use ($news, $data){
            if ($news->update($data)) {
                return $news;
            }

            throw new GeneralException('Something wrong when updating this news');
        });
    }

    public function getDeletedPaginated($page = 5, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model->onlyTrashed()->orderBy($orderBy, $sort)->paginate($page);
    }

    public function restore($news): News
    {
        $deletedNews = News::withTrashed()->where('id', $news)->first();
        if ($deletedNews->restore()) {
            return $deletedNews;
        }

        throw new GeneralException('Something wrong when restoring this news');
    }

    public function forceDelete($news): News
    {
        $deletedNews = News::withTrashed()->where('id', $news)->first();

        if ($deletedNews->forceDelete()) {
            return $deletedNews;
        }

        throw new GeneralException('Something wrong when deleting this news');
    }
}
