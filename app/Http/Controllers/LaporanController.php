<?php

namespace App\Http\Controllers;

use App\Models\User;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function store(Request $request, User $user)
    {
        $result = $request->file('laporan')->storeOnCloudinary()->getSecurePath();

        $request->user()->updateOrInsert(
            ['id' => $request->user()->id],
            ['laporan_url' => $result]
        );

        $status = User::find($request->user()->id);
        $status->state = 3;
        $status->save();

        return back();
    }
}
