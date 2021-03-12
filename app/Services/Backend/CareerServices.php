<?php

namespace App\Services\Backend;

use App\Exceptions\GeneralException;
use App\Models\Career;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class CareerServices extends BaseService
{
    public function __construct(Career $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Career
    {
        return DB::transaction(function () use ($data) {
            $news = $this->model::create($data);

            if ($news) {
                return $news;
            }

            throw new GeneralException('Something wrong when creating career');
        });
    }

    public function update(Career $career, array $data): Career
    {
        return DB::transaction(function () use ($career, $data){
            if ($career->update($data)) {
                return $career;
            }

            throw new GeneralException('Something wrong when updating this career');
        });
    }
}
