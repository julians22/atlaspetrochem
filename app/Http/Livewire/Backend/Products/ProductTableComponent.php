<?php

namespace App\Http\Livewire\Backend\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTableComponent extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.backend.products.product-table-component', [
            'products' => Product::where('name', 'like', '%'.$this->search.'%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
