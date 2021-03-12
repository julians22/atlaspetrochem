<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Career\StoreCareerRequest;
use App\Http\Requests\Backend\Career\UpdateCareerRequest;
use App\Models\Career;
use App\Services\Backend\CareerServices;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    protected $careerServices;

    public function __construct(CareerServices $careerServices) {
        $this->careerServices = $careerServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.career.index')->withCareers(Career::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareerRequest $request)
    {
        $this->careerServices->create($request->only("position",  "job_desk", "requirements"));
        return redirect()->route('admin.career')->with('success', 'Career success created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        return view('backend.career.show')->withCareer($career);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('backend.career.edit')->withCareer($career);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareerRequest $request, Career $career)
    {
        $this->careerServices->update($career, $request->only('position', 'job_desk', 'requirements'));
        return redirect()->route('admin.career')->with('success', 'Career success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $this->careerServices->deleteById($career->id);

        return redirect()->route('admin.career')->with('success', 'News success deleted');
    }
}
