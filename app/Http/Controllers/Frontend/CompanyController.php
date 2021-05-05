<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sliders\TeamBanner;
use Illuminate\Http\Request;
use App\Models\About\AboutContent;


class CompanyController extends Controller
{
    public function index()
    {
        return view('frontend.company.index', ['abouts' => AboutContent::orderBy('key', 'asc')->get()])->withTeam_banner(TeamBanner::active()->get());
    }
}
