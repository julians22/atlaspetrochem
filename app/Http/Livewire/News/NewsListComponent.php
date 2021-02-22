<?php

namespace App\Http\Livewire\News;

use App\Models\Articles\News;
use Livewire\Component;
use Livewire\WithPagination;


class NewsListComponent extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.news.news-list-component')->withNews(News::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'asc')->paginate(3));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
