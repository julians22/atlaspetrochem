<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerPerPage;
use App\Models\Category;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $bannerPage;

    public function __construct(BannerPerPage $bannerPage)
    {
        $this->bannerPage = $bannerPage->key('category-product-banner')->first();
    }
    
    public function index()
    {
        return view('frontend.product.index');
    }

    public function showCategories($slug)
    {
        $main_categories = MainCategory::where('slug', $slug)->first();
        return view('frontend.product.categories', ['bannerPage' => $this->bannerPage])->withMainCategories($main_categories);
    }

    public function list($division = null, $category)
    {
        return view('frontend.product.list')->withCategory(Category::slug($category)->first());
    }
}
