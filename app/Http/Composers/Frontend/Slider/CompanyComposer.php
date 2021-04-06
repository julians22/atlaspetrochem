<?php

namespace App\Http\Composers\Frontend\Slider;

use App\Models\Company\CompanyContent;
use App\Repositories\Frontend\Slider\CompanyRepository;
use Illuminate\View\View;

class CompanyComposer
{
    protected $bannerCompanyRepository;


    public function __construct(CompanyRepository $bannerCompanyRepository) {
        $this->bannerCompanyRepository = $bannerCompanyRepository;
    }

    public function compose(View $view)
    {
        $view->with('active_company_banner', $this->bannerCompanyRepository->getActiveBanner());
        $view->with('vision_content', CompanyContent::key('vision')->first());
        $view->with('mission_content', CompanyContent::key('mission')->first());
        $view->with('brand_content', CompanyContent::key('brand')->first());
        $view->with('workplace_content', CompanyContent::key('workplace')->first());
    }
}
