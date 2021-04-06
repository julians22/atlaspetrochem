<?php

namespace App\Http\Controllers\Backend\Sliders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slider\StoreTeamRequest;
use App\Http\Requests\Backend\Slider\UpdateTeamRequest;
use App\Models\Sliders\TeamBanner;
use Illuminate\Http\Request;

class TeamSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.slider.team.index', ['sliders' => TeamBanner::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        TeamBanner::create([
            'image_location' => $request->image_location,
            'active' => $request->has('active') ?: false
        ]);
        return redirect()->route('admin.slider.teams')->withFlashSuccess('Slider team successfully created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sliders\TeamBanner  $teamBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamBanner $teams)
    {
        return view('backend.slider.team.edit', ['slider' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sliders\TeamBanner  $teamBanner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, TeamBanner $teams)
    {
        $teams->update([
            'image_location' => $request->image_location,
            'active' => $request->has('active') ? true : false
        ]);
        return redirect()->route('admin.slider.teams')->withFlashSuccess('Slider team successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sliders\TeamBanner  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamBanner $teams)
    {
        $teams->delete();
        return redirect()->route('admin.slider.teams')->withFlashSuccess('Slider team successfully deleted');
    }

    public function get_deleted()
    {
        return view('backend.slider.team.deleted', ['sliders' => TeamBanner::onlyTrashed()->paginate(10)]);
    }

    public function restore($teams)
    {
        $teams = TeamBanner::withTrashed()->find($teams);
        $teams->restore();

        return redirect()->route('admin.slider.teams')->withFlashSuccess('Slider team successfully restored');
    }

    public function delete($teams)
    {
        $teams = TeamBanner::withTrashed()->find($teams);
        $teams->forceDelete();
        return redirect()->route('admin.slider.teams')->withFlashSuccess('Slider team successfully deleted');
    }
}
