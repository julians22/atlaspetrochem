<?php

namespace App\Http\Controllers\Backend\Sliders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slider\StoreCompanyRequest;
use App\Models\Sliders\CompanyBanner;
use Illuminate\Http\Request;

class CompanySliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.slider.company.index', ['sliders' => CompanyBanner::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        CompanyBanner::create($request->only('image_location', 'active'));
        return redirect()->route('admin.slider.company')->withFlashSuccess('Slider company successfully created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sliders\CompanyBanner  $companyBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyBanner $company)
    {
        return view('backend.slider.company.edit', ['slider' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sliders\CompanyBanner  $companyBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyBanner $company)
    {
        $company->update([
            'image_location' => $request->image_location,
            'active' => $request->has('active') ? true : false
        ]);
        return redirect()->route('admin.slider.company')->withFlashSuccess('Slider company successfully created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sliders\CompanyBanner  $companyBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyBanner $company)
    {
        $company->delete();
        return redirect()->route('admin.slider.company.deleted')->withFlashSuccess('Slider company successfully deleted');
    }

    public function get_deleted()
    {
        return view('backend.slider.company.deleted', ['sliders' => CompanyBanner::onlyTrashed()->paginate(10)]);
    }

    public function restore($company)
    {
        $company = CompanyBanner::withTrashed()->find($company);
        $company->restore();

        return redirect()->route('admin.slider.company')->withFlashSuccess('Slider company successfully restored');

    }

    public function delete($company)
    {
        $company = CompanyBanner::withTrashed()->find($company);
        $company->forceDelete();
        return redirect()->route('admin.slider.company')->withFlashSuccess('Slider company successfully deleted');
    }
}
