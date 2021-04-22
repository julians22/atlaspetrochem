<?php

namespace App\Http\Controllers\Backend\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Articles\Galery\CreateGaleryRequest;
use App\Http\Requests\Backend\Articles\Galery\UpdateGaleryRequest;
use App\Models\Articles\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.articles.galery.index', ['galeries' => Galery::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.articles.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGaleryRequest $request)
    {
        $url = '';
        if ($request->type == 'video' && $request->video_source == 'upload') {
            $url = $request->video_source_upload;
        }elseif ($request->type == 'video' && $request->video_source == 'youtube') {
            $url = Str::afterLast($request->video_source_youtube, '/');
        }
        Galery::create([
            'title' => $request->title,
            'type' => $request->type,
            'image_location' => $request->type == 'picture' ? $request->featured_image : 'NULL',
            'video_url' =>  $request->type == 'video' ? $url : 'NULL',
            'youtube' => $request->video_source == 'youtube' ? true : false
        ]);

        return redirect()->route('admin.articles.galery')->withFlashSuccess('Galery successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        return view('backend.articles.galery.show', ['galery' => $galery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('backend.articles.galery.edit', ['galery' => $galery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        $url = '';
        if ($request->type == 'video' && $request->video_source == 'upload') {
            $url = $request->video_source_upload;
        } elseif ($request->type == 'video' && $request->video_source == 'youtube') {
            $url = Str::afterLast($request->video_source_youtube, '/');
        }
        $galery->update([
            'title' => $request->title,
            'type' => $request->type,
            'image_location' => $request->type == 'picture' ? $request->featured_image : 'NULL',
            'video_url' =>  $request->type == 'video' ? $url : 'NULL',
            'youtube' => $request->video_source == 'youtube' ? true : false
        ]);

        $galery->save();

        return redirect()->route('admin.articles.galery')->withFlashSuccess('Galery successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('admin.articles.galery')->withFlashSuccess('Galery successfully deleted');
    }
}
