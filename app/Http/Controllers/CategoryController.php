<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $categories = $user->categories;

        return view('categoriesIndex', compact('categories'));
    }

    public function create()
    {
        return view('categories.categoriesCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameCat' => 'required',
        ]);

        $category = new Category();
        $category->nameCat = $request->nameCat;
        $category->idUsu = auth()->id();
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.categoriesEdit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nameCat' => 'required',
        ]);

        $category->nameCat = $request->nameCat;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
