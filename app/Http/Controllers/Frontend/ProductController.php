<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product.index');
    }

    public function industrial()
    {
        return view('frontend.product.categories')->withCategoriesIndustrial(Category::industrial()->get());
    }

    public function list($division = null, $category)
    {
        return view('frontend.product.list')->withCategory(Category::slug($category)->first());
    }
}
