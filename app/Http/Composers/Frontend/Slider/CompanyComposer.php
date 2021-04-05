<?php

namespace App\Http\Composers\Frontend\Slider;

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
    }
}
