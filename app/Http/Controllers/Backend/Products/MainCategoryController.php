<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.products.main-categories.index', ['categories' => MainCategory::paginate(10)]);
    }

    public function edit(MainCategory $category)
    {
        return view('backend.products.main-categories.edit', ['category' => $category]);
    }

    public function update(Request $request, MainCategory $category)
    {
        $request->validate([
            'name' => ['required']
        ]);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_location' => $request->image_location
        ]);

        $category->save();

        return redirect()->route('admin.product.main-category.index')->withFlashSuccess('Main Category Successfully Updated');
    }

    public function show(MainCategory $category)
    {
        return view('backend.products.main-categories.show', ['category' => $category]);
    }
}
