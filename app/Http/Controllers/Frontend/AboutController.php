<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About\AboutContent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about.index', ['abouts' => AboutContent::orderBy('key', 'asc')->get()]);
    }
}
