<?php 

namespace App\Http\Composers\Frontend\Slider;

use App\Repositories\Frontend\Slider\BannerRepository;
use Illuminate\View\View;

/**
 * BannerComposer Class
 */
class BannerComposer
{
    /** @var $bannerRepository */
    protected $bannerRepository;

    /**
     * BannerComposer Constructor
     *
     *
     * @param BannerRepository $bannerRepository
     **/
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    /**
     *
     *
     * @param View $view
     * @return bool|mixed
     **/
    public function compose(View $view)
    {
        $view->with('active_banner', $this->bannerRepository->getActiveBanner());
    }
}
