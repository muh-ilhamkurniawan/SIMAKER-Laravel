<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelass = Kelas::all();
        return view('kelas.index', compact('kelass'));
    }
    public function create()
    {
        return view('kelas.create');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_kelas' => 'required|max:255',
        ]);

        // Simpan data ke dalam database
        $kelas = new Kelas();
        $kelas->nama_kelas = $validatedData['nama_kelas'];
        $kelas->save();

        // Redirect dengan pesan sukses
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }
    public function destroy($kode_kelas)
    {
        $kelas = Kelas::findOrFail($kode_kelas);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }


}