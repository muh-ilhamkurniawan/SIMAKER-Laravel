<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'level' => 'required|max:255',
            'name' => 'required|max:255',
        ]);
        

        // Simpan data ke dalam database
        $user = new User();
        $user->username = $validatedData['username'];
        // Hash password dengan Bcrypt
        $user->password = bcrypt($validatedData['password']);

        $user->level = $validatedData['level'];
        $user->name = $validatedData['name'];

        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil dihapus.');
    }

}