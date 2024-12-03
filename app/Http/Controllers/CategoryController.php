<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Categories ::all();
        return view('category', compact('categories'));
    }

    public function createCategory(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::create($validate);
        return redirect()->route('category')->with('status', 'Category creada correctamente');
    }

    public function updateCategory(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::where('id', $request->id)->update($validate);
        return redirect()->route('category')->with('status', 'Category actualizada correctamente');
    }

    public function updateCategoryView($id)
    {
        $category = Category::find($id);
        return view('editar_category_view', compact('category'));
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);
        return redirect()->route('category')->with('status', 'Category eliminada correctamente');
    }
}