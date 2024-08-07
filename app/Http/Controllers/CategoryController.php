<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        // Simpan data ke dalam database
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();

        // Redirect dengan pesan sukses
        return redirect()->route('category.index')->with('success', 'Kategori berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Kategori berhasil dihapus.');
    }
    // Fungsi edit
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    // Fungsi update
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        // Temukan kategori dan update data
        $category = Category::findOrFail($id);
        $category->name = $validatedData['name'];
        $category->save();

        // Redirect dengan pesan sukses
        return redirect()->route('category.index')->with('success', 'Kategori berhasil diupdate.');
    }


}
