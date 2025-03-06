<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }


    public function create()
    {
        $parents = Category::all();
        return view('dashboard.categories.create', compact('parents'));
    }


    public function store(Request $request)

    {

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        $category = Category::create($request->all());
        return redirect()->route('dashboard.categories.index')->with('success', 'Category created successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch (\Exception $e) {
            return redirect()->route('dashboard.categories.index')->with('info', 'Category not found !');
        }
        $parents = Category::where('id', '<>', $id)
            ->where(function ($query) use ($id) {
                $query->whereNull('parent_id')
                    ->orWhere('parent_id', '<>', $id);
            })
            ->get();
        return view('dashboard.categories.edit', compact('category', 'parents'));
    }


    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('dashboard.categories.index')->with('success', 'Category updated successfully');
    }
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('dashboard.categories.index')->with('success', 'Category deleted successfully');
    }
}
