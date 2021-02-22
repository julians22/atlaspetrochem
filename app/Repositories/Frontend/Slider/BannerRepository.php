<?php 

namespace App\Repositories\Frontend\Slider;

use App\Models\Sliders\Banner;
use App\Repositories\BaseRepository;


/**
 * BannerRepository class
 */

class BannerRepository extends BaseRepository
{
    /**
     * BannerRepository Constructor
     *
     *
     * @param Banner $model
     **/
    public function __construct(Banner $model) {
        $this->model = $model;
    }

    public function getActiveBanner()
    {
        return $this->model->active()->get();
    }
}
