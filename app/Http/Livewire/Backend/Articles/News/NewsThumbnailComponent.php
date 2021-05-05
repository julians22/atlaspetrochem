<?php

namespace App\Http\Livewire\Backend\Articles\News;

use App\Models\Articles\News;
use App\Models\Thumbnails\NewsThumbnail;
use Livewire\Component;

class NewsThumbnailComponent extends Component
{
    public $news;

    public function render()
    {
        $newsThumbs = NewsThumbnail::with('news')->orderBy('sort', 'asc')->get();
        $newses = News::whereDoesntHave('newsThumb')->get();
        return view('livewire.backend.articles.news.news-thumbnail-component', ['newsThumbs' => $newsThumbs, 'newses' => $newses]);
    }

    public function modalCreateThumb()
    {
        $this->emit('open-modal-create');
    }

    public function saveThumb()
    {
        $createThumbs = NewsThumbnail::create([
            'news_id' => $this->news
        ]);

        if ($createThumbs) {
            $this->emit('close-modal-create');
            $this->emit('swal-lvwr', ['data' => ['message' => 'Thumbnail success created', 'type' => 'success']]);
        }
    }

    public function sortDown($id)
    {
        $thumbnail = NewsThumbnail::find($id);
        if ($thumbnail->sort !== 0) {
            $nextThubnail = NewsThumbnail::where('sort', $thumbnail->sort + 1)->first();
            $thumbnail->sort += 1;
            $thumbnail->save();
            if ($nextThubnail) {
                $nextThubnail->sort -= 1;
                $nextThubnail->save();
            }
        }

        if ($thumbnail->sort === 0) {
            $this->updatedOnlySorted();

            $thumbnail->sort += 1;
            $thumbnail->save();
        }
    }

    public function sortUp($id)
    {
        $thumbnail = NewsThumbnail::find($id);
        if ($thumbnail->sort !== 1) {
            $prevThumbnail = NewsThumbnail::where('sort', $thumbnail->sort - 1)->first();
            $thumbnail->sort -= 1;
            $thumbnail->save();
            if ($prevThumbnail) {
                $prevThumbnail->sort += 1;
                $prevThumbnail->save();
            }
        }
    }

    protected function updatedOnlySorted()
    {
        $thumbnails = NewsThumbnail::where('sort', '!=', 0)->get();
        if ($thumbnails) {
            foreach ($thumbnails as $thumbnail) {
                NewsThumbnail::find($thumbnail->id)->update([
                    'sort' => $thumbnail->sort + 1
                ]);
            }

            return true;
        }

        return true;
    }
}
