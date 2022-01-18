<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class DaftarPraktikIndustriController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::all();
        return view('perusahaan.daftar',[
            'perusahaans' => $perusahaan
        ]);
    }

    public function show()
    {
        return view('perusahaan.show');
    }

    public function store(Perusahaan $perusahaan, Request $request)
    {
        $perusahaan->register()->create([
            'user_id' => $request->user()->id,
        ]);
    }
}
