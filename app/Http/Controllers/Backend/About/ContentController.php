<?php

namespace App\Http\Controllers\Backend\About;

use App\Http\Controllers\Controller;
use App\Models\About\AboutContent;
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
        return view('backend.about.content.index', ['contents' => AboutContent::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About\AboutContent  $content
     * @return \Illuminate\Http\Response
     */
    public function show(AboutContent $content)
    {
        return view('backend.about.content.show', ['content' => $content]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About\AboutContent  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutContent $content)
    {
        return view('backend.about.content.edit', ['content' => $content]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutContent $content)
    {
        $content->update($request->except('_token', '_method', 'files'));

        return redirect()->route('admin.content.about.index')->withFlashSuccess('About content updated');
    }
}
