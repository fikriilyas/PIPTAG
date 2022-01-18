<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(User $user)
    {
        $jurnals = $user->jurnals()->paginate(20);
        return view('jurnal.index', [
            'user' => $user,
            'jurnals' => $jurnals
        ]);
    }

    public function store(User $user, Request $request)
    {
        $request->user()->jurnals()->create([
            'jurnal'=>$request->jurnal,
            'day'=>$request->day
        ]);
    }
}
