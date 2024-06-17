<?php

namespace App\Http\Controllers;

use App\Models\Keterlambatan;
use Illuminate\Http\Request;

class KeterlambatanController extends Controller
{
    public function index()
    {
        $keterlambatans = Keterlambatan::all();
        return view('keterlambatan.index', compact('keterlambatans'));
    }
}
