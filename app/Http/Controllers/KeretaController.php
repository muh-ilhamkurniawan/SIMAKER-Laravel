<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

use App\Models\Kelas;

class KeretaController extends Controller
{
    public function index()
    {
        $keretas = Kereta::all();
        return view('kereta.index', compact('keretas'));
    }
    public function create()
    {
        $kelasList = Kelas::all();
        return view('kereta.create', compact('kelasList'));
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'no_ka' => 'required|max:255',
            'nama' => 'required|max:255',
            'tujuan' => 'required|max:255',
            // 'kelas' => 'required|max:255',
            'kelas' => 'required|exists:kelas,nama_kelas', // Sesuaikan dengan nama kolom foreign key
            'kedatangan' => 'required',
            'keberangkatan' => 'required'
        ]);
        

        // Simpan data ke dalam database
        $kereta = new Kereta();
        $kereta->no_ka = $validatedData['no_ka'];
        $kereta->nama = $validatedData['nama'];
        $kereta->tujuan = $validatedData['tujuan'];
        $kereta->kelas = $validatedData['kelas'];
        $kereta->kedatangan = $validatedData['kedatangan'];
        $kereta->keberangkatan = $validatedData['keberangkatan'];

        $kereta->save();

        // Redirect dengan pesan sukses
        return redirect()->route('kereta.index')->with('success', 'Kereta berhasil ditambahkan.');
    }
    public function destroy($no_ka)
    {
        $kereta = Kereta::findOrFail($no_ka);
        $kereta->delete();

        return redirect()->route('kereta.index')->with('success', 'Kereta berhasil dihapus.');
    }
}
