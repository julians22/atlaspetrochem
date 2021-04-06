<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Content\CompanyContentRequest;
use App\Models\Company\CompanyContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.company.content.index', ['contents' => CompanyContent::all()]);
    }

    public function update_bulk(CompanyContentRequest $request)
    {
        $patch = $request->except('_token', 'files', '_method');
        foreach ($patch as $key => $value) {
            CompanyContent::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->route('admin.content.company.index')->withFlashSuccess('Company contents updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyContent $companyContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyContent $companyContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyContent $companyContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyContent $companyContent)
    {
        //
    }
}
