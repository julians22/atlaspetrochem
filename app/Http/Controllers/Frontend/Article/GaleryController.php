<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Articles\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        return view('frontend.article.galery.index')->withGaleries(Galery::all());
    }
}
