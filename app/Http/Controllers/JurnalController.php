<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all()->find($request->user()->id);
        $jurnals = $user->jurnals()->paginate(20);
        return view('jurnal.index', [
            'user' => $user,
            'jurnals' => $jurnals
        ]);
    }

    public function store(User $user, Request $request)
    {
        $this->validate($request, [
            'jurnal' => 'required',
            'day' => 'required|integer'
        ]);

        $request->user()->jurnals()->create([
            'jurnal'=>$request->jurnal,
            'day'=>$request->day
        ]);

        $totalJurnal = Jurnal::where('user_id', $request->user()->id)->get()->count();
        if((($request->day == 3) && ($totalJurnal==3))){
            $status = User::find($request->user()->id);
            $status->state = 2;
            $status->save();
            return redirect('dashboard.mahasiswa');
        }else{
            return back();
        }

    }
}
