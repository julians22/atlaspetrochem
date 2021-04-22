<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BannerPerPage;
use Illuminate\Http\Request;

class BannerPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.banner.index', ['bannerPerPages' => BannerPerPage::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerPerPage  $bannerPerPage
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerPerPage $bannerPerPage)
    {
        return view('backend.banner.edit', ['bannerPerPage' => $bannerPerPage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerPerPage  $bannerPerPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BannerPerPage $bannerPerPage)
    {
        $bannerPerPage->update([
            'image_location_desktop' => $request->image_location_desktop
        ]);

        $bannerPerPage->save();

        return redirect()->route('admin.banner.index')->withFlashSuccess('Banner Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerPerPage  $bannerPerPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerPerPage $bannerPerPage)
    {
        //
    }
}
