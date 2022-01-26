<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardPembimbingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $mahasiswa = User::where('pembimbing', $request->user()->id)->where('role','mahasiswa')->with('pendaftaran','pendaftaran.perusahaan')->get();
        return view('dashboard.PembimbingDashboard',[
            'mahasiswa' => $mahasiswa,
        ]);
    }
    public function detailMahasiswa(User $user)
    {
        $perusahaan = $user->pendaftaran()->with('perusahaan')->get();
        $jurnal=  $user->jurnals()->where('user_id',$user->id)->get();
        return view('mahasiswa.show',[
            'mhs'=>$user,
            'perusahaan'=>$perusahaan,
            'jurnals'=>$jurnal
        ]);
    }
}
