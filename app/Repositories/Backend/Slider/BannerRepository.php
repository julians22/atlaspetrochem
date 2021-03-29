<?php

namespace App\Repositories\Backend\Slider;

use App\Events\Backend\Slider\Banner\BannerUpdated;
use App\Exceptions\GeneralException;
use App\Models\Sliders\Banner;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * BannerRepository class
 */
class BannerRepository extends BaseRepository
{
    /**
     * BannerRpository constructor
     *
     *
     * @param Banner $model
     **/
    public function __construct(Banner $model)
    {
        $this->model = $model;
    }

    public function getActivePaginated($paged = 5, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->model->orderBy($orderBy, $sort)->paginate($paged);
    }

    public function create(array $data, $active = false, $linked = false): Banner
    {
        return DB::transaction(function() use ($data, $active, $linked){
            $banner = $this->model::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'image_location' => $data['image_location'],
                'active' => $active,
                'linked' => $linked,
                'linked_location' => $linked ? $data['linked_location'] : NULL,
            ]);

            if ($banner) {
                return $banner;
            }

            throw new GeneralException(__('exceptions.backend.access.users.create_error'));
        });
    }

    public function update(Banner $banner, array $data, $active, $linked): Banner
    {
        return DB::transaction(function () use ($banner, $data, $active, $linked){
            if ($banner->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'image_location' => $data['image_location'],
                'overlay_level' => $data['overlay_level'],
                'active' => $active,
                'linked' => $linked,
                'linked_location' => $linked ? $data['linked_location'] : NULL,
                // 'updated_at' => Carbon::now()
            ])) {

                event(new BannerUpdated($banner));
                return $banner;
            }

            throw new GeneralException(__('exceptions.backend.access.users.update_error'));
        });
    }
}
