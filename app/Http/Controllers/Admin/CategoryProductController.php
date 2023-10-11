<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Http\Requests\Admin\CategoryProductRequest;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoryProducts = CategoryProduct::all();
        return view('admin.pages.categoryProduct.index', compact('categoryProducts'));
    }

    public function create()
    {
        return view('admin.pages.categoryProduct.create');
    }

    public function store(CategoryProductRequest $request)
    {
        CategoryProduct::create($request->all());
        return redirect()->route('admin.categoryProduct.index');
    }

    public function edit($id)
    {
        $categoryProduct = CategoryProduct::findOrFail($id);
        return view('admin.pages.categoryProduct.edit', compact('categoryProduct'));
    }

    public function update(CategoryProductRequest $request, $id)
    {
        CategoryProduct::findOrFail($id)->update($request->all());
        return redirect()->route('admin.categoryProduct.index');
    }

    public function destroy($id)
    {
        CategoryProduct::findOrFail($id)->delete();
        return redirect()->route('admin.categoryProduct.index');
    }
}
