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
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->user_id = auth()->id();
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
