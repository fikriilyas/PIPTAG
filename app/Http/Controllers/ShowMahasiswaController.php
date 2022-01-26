<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowMahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }
}
