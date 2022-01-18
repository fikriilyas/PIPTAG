<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class TambahPerusahaanController extends Controller
{
    public function index()
    {
        return view('perusahaan.index');
    }

    public function store(Request $request)
    {
        Perusahaan::create([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
            'alamat'=>$request->alamat
        ]);
    }
}
