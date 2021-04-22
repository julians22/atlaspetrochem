<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Articles\Galery;
use App\Models\BannerPerPage;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    protected $bannerPage;

    public function __construct(BannerPerPage $bannerPage) {
        $this->bannerPage = $bannerPage->key('galery-banner')->first();
    }

    public function index()
    {
        return view('frontend.article.galery.index', ['bannerPage' => $this->bannerPage])
            ->withPictures(Galery::type('picture')->get())
            ->withVideos(Galery::type('video')->get());
    }
}
