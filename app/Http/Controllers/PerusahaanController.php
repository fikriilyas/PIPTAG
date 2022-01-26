<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function show(Perusahaan $perusahaan, Request $request)
    {
        $company = Perusahaan::find($request->company);
        return view('perusahaan.show', [
            'company' => $company
        ]);
    }

    public function store(Perusahaan $perusahaan,  Request $request)
    {
        $perusahaan->register()->create([
            'user_id' => $request->user()->id,
        ]);

        $flight = User::find($request->user()->id);
        $flight->state = 1;
        $flight->save();

        return back();
    }
}
