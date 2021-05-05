<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About\AboutContent;
use App\Models\BannerPerPage;

class AboutController extends Controller
{
    protected $bannerPage;

    public function __construct(BannerPerPage $bannerPage) {
        $this->bannerPage = $bannerPage->key('about-banner')->first();
    }

    public function index()
    {
        return view('frontend.about.index', ['abouts' => AboutContent::orderBy('key', 'asc')->get(), 'bannerPage' => $this->bannerPage]);
    }
}
