<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Articles\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('frontend.article.news.index');
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('frontend.article.news.show')->withNews($news);
    }
}
