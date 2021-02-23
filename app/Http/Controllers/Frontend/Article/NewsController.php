<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Articles\News;
use App\Services\Frontend\Articles\NewsServices;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsServices;

    public function __construct(NewsServices $newsServices) {
        $this->newsServices = $newsServices;
    }

    public function index()
    {
        return view('frontend.article.news.index');
    }

    public function show($slug)
    {
        return view('frontend.article.news.show')->withNews($this->newsServices->getBySlug($slug));
    }
}
