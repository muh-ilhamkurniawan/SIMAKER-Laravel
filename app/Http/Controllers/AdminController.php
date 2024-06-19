<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'level' => 'required|max:255',
            'nama' => 'required|max:255',
        ]);
        

        // Simpan data ke dalam database
        $admin = new Admin();
        $admin->username = $validatedData['username'];
        // Hash password dengan Bcrypt
        $admin->password = bcrypt($validatedData['password']);

        $admin->level = $validatedData['level'];
        $admin->nama = $validatedData['nama'];

        $admin->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.index')->with('success', 'admin berhasil ditambahkan.');
    }
    public function destroy($id_admin)
    {
        $admin = Admin::findOrFail($id_admin);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Pengguna berhasil dihapus.');
    }

}