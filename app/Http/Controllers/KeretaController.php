<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    public function index()
    {
        $keretas = Kereta::all();
        return view('kereta.index', compact('keretas'));
    }
}
