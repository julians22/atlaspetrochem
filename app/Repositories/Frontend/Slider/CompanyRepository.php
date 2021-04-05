<?php

namespace App\Repositories\Frontend\Slider;

use App\Models\Sliders\CompanyBanner;
use App\Repositories\BaseRepository;

class CompanyRepository extends BaseRepository
{

    public function __construct(CompanyBanner $model) {
        $this->model = $model;
    }

    public function getActiveBanner()
    {
        return $this->model->active()->get();
    }
}
