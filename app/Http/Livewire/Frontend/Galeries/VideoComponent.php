<?php

namespace App\Http\Livewire\Frontend\Galeries;

use App\Models\Articles\Galery;
use Livewire\Component;
use Livewire\WithPagination;

class VideoComponent extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.frontend.galeries.video-component', ['videos' => Galery::type('video')->paginate(1, ['*'], 'videos')]);
    }
}
