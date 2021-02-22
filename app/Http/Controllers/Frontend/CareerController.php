<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Career\SendCareerRequest;
use App\Models\Career;
use App\Services\Frontend\CareerServices;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CareerController extends Controller
{
    protected $careerServices;

    public function __construct(CareerServices $careerServices) {
        $this->careerServices = $careerServices;
    }

    public function index()
    {
        return view('frontend.career.index')->withCareers(Career::all());
    }

    public function show($uuid)
    {
        return view('frontend.career.show')->withCareer($this->careerServices->findActiveByUuid($uuid));
    }

    public function send(SendCareerRequest $request, $position_id)
    {
        $this->careerServices->store($position_id, $request->only('name', 'gender', 'email', 'phone', 'message'), $request->file('cv_file'));
    }
}
