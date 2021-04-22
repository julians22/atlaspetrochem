<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Career\SendCareerRequest;
use App\Models\BannerPerPage;
use App\Models\Career;
use App\Services\Frontend\CareerServices;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CareerController extends Controller
{
    protected $careerServices, $bannerPage, $bannerPageShow;

    public function __construct(CareerServices $careerServices, BannerPerPage $bannerPage) {
        $this->careerServices = $careerServices;
        $this->bannerPage = $bannerPage->key('careers-banner')->first();
        $this->bannerPageShow = $bannerPage->key('careers-show-banner')->first();
    }

    public function index()
    {
        return view('frontend.career.index', ['bannerPage' => $this->bannerPage])->withCareers(Career::all());
    }

    public function show($uuid)
    {
        return view('frontend.career.show', ['bannerPage' => $this->bannerPageShow])->withCareer($this->careerServices->findActiveByUuid($uuid));
    }

    public function send(SendCareerRequest $request, $position_id)
    {
        $this->careerServices->store($position_id, $request->only('name', 'gender', 'email', 'phone', 'message'), $request->file('cv_file'));
        return redirect()->route('frontend.career')->withToastSuccess('Your application has been submited, we will review your document. Thank You.');
    }
}
