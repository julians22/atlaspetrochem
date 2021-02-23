<?php

namespace App\Http\Controllers\Backend\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Article\News\StoreNewsRequest;
use App\Http\Requests\Backend\Article\News\UpdateNewsRequest;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Models\Articles\News;
use App\Services\Backend\Articles\NewsServices;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    protected $newsServices;

    public function __construct(NewsServices $newsServices) {
        $this->newsServices = $newsServices;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.articles.news.index')->withNewses($this->newsServices->getActivePaginated(5, 'created_at', 'desc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(ManageUserRequest $request)
    {
        return view('backend.articles.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\Article\News\StoreNewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $this->newsServices->create($request->only(
            'title',
            'intro',
            'value',
            'thumb_location',
            'featured_image'
        ));

        return redirect()->route('admin.articles.news')->withFlashSuccess('News success created');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param  \App\Models\Articles\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(ManageUserRequest $request, News $news)
    {
        return view('backend.articles.news.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param  \App\Models\Articles\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageUserRequest $request, News $news)
    {
        return view('backend.articles.news.edit', [
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\Article\News\UpdateNewsRequest $request
     * @param  \App\Models\Articles\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $this->newsServices->update($news, $request->only(
            'title', 'intro', 'value', 'thumb_location', 'featured_image'
        ));

        return redirect()->route('admin.articles.news')->withFlashSuccess('News success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param  \App\Models\Articles\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageUserRequest $request, News $news)
    {
        $this->newsServices->deleteById($news->id);

        return redirect()->route('admin.articles.news')->withFlashSuccess('News success deleted');
    }

    public function getDeleted()
    {
        return view('backend.articles.news.deleted', ['newses' => $this->newsServices->getDeletedPaginated(5, 'id', 'asc')]);
    }

    public function delete(ManageUserRequest $request, $deletedNews)
    {
        $this->newsServices->forceDelete($deletedNews);

        return redirect()->route('admin.articles.news')->withFlashSuccess('News success deleted permanently');
    }

    public function restore($deletedNews)
    {
        $this->newsServices->restore($deletedNews);

        return redirect()->route('admin.articles.news')->withFlashSuccess('News success restored');
    }
}
