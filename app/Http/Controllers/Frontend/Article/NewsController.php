<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Articles\News;
use App\Models\BannerPerPage;
use App\Services\Frontend\Articles\NewsServices;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsServices, $bannerPage, $bannerPageShow;

    public function __construct(NewsServices $newsServices, BannerPerPage $bannerPage) {
        $this->newsServices = $newsServices;
        $this->bannerPage = $bannerPage->key('news-banner')->first();
        $this->bannerPageShow = $bannerPage->key('news-show-banner')->first();
    }

    public function index()
    {
        return view('frontend.article.news.index', ['bannerPage' => $this->bannerPage]);
    }

    public function show($slug)
    {
        return view('frontend.article.news.show', ['bannerPage' => $this->bannerPageShow])->withNews($this->newsServices->getBySlug($slug));
    }
}
