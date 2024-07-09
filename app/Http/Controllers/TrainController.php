<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('train.index', compact('trains'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('train.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'id' => 'required|max:255',
            'name' => 'required|max:255',
            'destination' => 'required|max:255',
            'category' => 'required|exists:categories,name',
            'arrival' => 'required',
            'departure' => 'required'
        ]);

        // Simpan data ke dalam database
        $train = new Train();
        $train->id = $validatedData['id'];
        $train->name = $validatedData['name'];
        $train->destination = $validatedData['destination'];
        $train->category = $validatedData['category'];
        $train->arrival = $validatedData['arrival'];
        $train->departure = $validatedData['departure'];

        $train->save();

        // Redirect dengan pesan sukses
        return redirect()->route('train.index')->with('success', 'Kereta berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $train = Train::findOrFail($id);
        $train->delete();

        return redirect()->route('train.index')->with('success', 'Kereta berhasil dihapus.');
    }

    // Fungsi edit
    public function edit($id)
    {
        $train = Train::findOrFail($id);
        $categories = Category::all();
        return view('train.edit', compact('train', 'categories'));
    }

    // Fungsi update
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'destination' => 'required|max:255',
            'category' => 'required|exists:categories,name',
            'arrival' => 'required',
            'departure' => 'required'
        ]);

        // Temukan kereta dan update data
        $train = Train::findOrFail($id);
        $train->name = $validatedData['name'];
        $train->destination = $validatedData['destination'];
        $train->category = $validatedData['category'];
        $train->arrival = $validatedData['arrival'];
        $train->departure = $validatedData['departure'];
        $train->save();

        // Redirect dengan pesan sukses
        return redirect()->route('train.index')->with('success', 'Kereta berhasil diupdate.');
    }

}
