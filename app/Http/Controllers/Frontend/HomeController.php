<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About\AboutContent;
use App\Models\Articles\Galery;
use App\Models\MainCategory;
use App\Services\Frontend\Articles\NewsServices;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{

    protected $newsServices;

    public function __construct(NewsServices $newsServices) {
        $this->newsServices = $newsServices;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index', [
            'newses' => $this->newsServices->getActiveThumbnail()->count() >= 3 ? $this->newsServices->getActiveThumbnail() : $this->newsServices->getDefaultNewsThumnail(),
            'abouts' => AboutContent::orderBy('key', 'asc')->get(),
            'videos' => Galery::type('video')->latest()->limit(3)->get()
        ]);
    }

    public function mock_1()
    {
        return view('mocks.mock_one');
    }
    
    public function mock_2()
    {
        return view('mocks.mock_two');
    }
}
