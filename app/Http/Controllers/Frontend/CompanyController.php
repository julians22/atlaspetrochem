<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sliders\TeamBanner;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('frontend.company.index')->withTeam_banner(TeamBanner::active()->get());
    }
}
