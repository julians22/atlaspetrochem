<?php

namespace App\Http\Livewire\Frontend\Galeries;

use App\Models\Articles\Galery;
use Livewire\Component;
use Livewire\WithPagination;

class PictureComponent extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.frontend.galeries.picture-component',
            ['pictures' => Galery::type('picture')->paginate(3, ['*'], 'picture')]
        );
    }
}
