<?php

namespace App\Http\Controllers\Backend\Sliders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Http\Requests\Backend\Slider\StoreBannerRequest;
use App\Http\Requests\Backend\Slider\UpdateBannerRequest;
use App\Models\Sliders\Banner;
use App\Repositories\Backend\Slider\BannerRepository;
use Illuminate\Http\Request;

class BannerSliderController extends Controller
{
    protected $bannerRepository;

    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageUserRequest $request)
    {
        return view('backend.slider.banner.index')->withBanners($this->bannerRepository->getActivePaginated());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ManageUserRequest $request)
    {
        return view('backend.slider.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        $this->bannerRepository->create($request->only('title', 'description', 'image_location', 'overlay_level', 'linked_to'), $request->active ?: 0, $request->linked ?: 0);

        return redirect()->route('admin.slider.banner')->withFlashSuccess('Slider Banner Success Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sliders\Banner  $Banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $Banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sliders\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.slider.banner.edit')->withBanner($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sliders\Banner  $Banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $this->bannerRepository->update($banner, $request->only('title', 'description', 'image_location', 'overlay_level', 'linked_location'), $request->active ?: 0, $request->linked ?: 0);

        return redirect()->route('admin.slider.banner')->withFlashSuccess('Slider Banner Success Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sliders\Banner  $Banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $Banner)
    {
        //
    }
}
