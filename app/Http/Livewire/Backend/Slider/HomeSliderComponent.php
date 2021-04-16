<?php

namespace App\Http\Livewire\Backend\Slider;

use App\Models\Sliders\Banner;
use App\Repositories\Backend\Slider\BannerRepository;
use Livewire\Component;

class HomeSliderComponent extends Component
{
    protected $banners;
    public function render()
    {
        $model = new Banner();
        $bannerRepository = new BannerRepository($model);

        $this->banners = $bannerRepository->getActivePaginated(5, 'sort', 'asc');

        return view('livewire.backend.slider.home-slider-component', ['banners' => $this->banners]);
    }

    public function sortDown($id)
    {
        $banner = Banner::find($id);
        if ($banner->sort !== 0) {
            $nextBanner = Banner::where('sort',$banner->sort + 1)->first();
            $banner->sort+=1;
            $banner->save();
            if ($nextBanner) {
                $nextBanner->sort-=1;
                $nextBanner->save();
            }
        }

        if ($banner->sort === 0) {
            $this->updatedOnlySorted();

            $banner->sort += 1;
            $banner->save();
        }
    }

    public function sortUp($id)
    {
        $banner = Banner::find($id);
        if ($banner->sort !== 1) {
            $prevBanner = Banner::where('sort',$banner->sort - 1)->first();
            $banner->sort-=1;
            $banner->save();
            if ($prevBanner) {
                $prevBanner->sort+=1;
                $prevBanner->save();
            }
        }
    }

    protected function updatedOnlySorted()
    {
        $banners = Banner::where('sort', '!=', 0)->get();
        if ($banners) {
            foreach ($banners as $banner) {
                Banner::find($banner->id)->update([
                    'sort' => $banner->sort + 1
                ]);
            }

            return true;
        }

        return true;
    }
}
