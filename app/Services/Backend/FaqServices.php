<?php

namespace App\Services\Backend;

use App\Exceptions\GeneralException;
use App\Models\Faq;
use App\Services\BaseService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FaqServices extends BaseService
{
    public function __construct(Faq $model)
    {
        $this->model = $model;
    }

    public function getPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model->orderBy('active', 'desc')->orderBy($orderBy, $sort)->paginate($paged);
    }

    public function create(array $data, $active = false): Faq
    {
        $data = Arr::add($data, 'active', $active ?: false);
        return DB::transaction(function () use ($data){
            $faq = $this->model::create($data);
            if ($faq) {
                return $faq;
            }

            throw new GeneralException('Something wrong when creating faq');
        });
    }
}
