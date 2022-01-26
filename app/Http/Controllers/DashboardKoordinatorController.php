<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardKoordinatorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $angkatan = User::get()->where('role','mahasiswa')->pluck('angkatan')->unique();
        $total_mahasiswa =  User::where('role','mahasiswa')->count();
        $mahasiswa_terdaftar_perusahaan = User::where('state','1')->count();
        $mahasiswa_melaksanakan_pi = User::where('state','2')->count();
        $mahasiswa_selesai_laporan = User::where('state','3')->count();
        return view('dashboard.KoordinatorDashboard',[
            'total_mahasiswa'=>$total_mahasiswa,
            'mahasiswa_terdaftar'=>$mahasiswa_terdaftar_perusahaan,
            'mahasiswa_melaksanakan_pi'=>$mahasiswa_melaksanakan_pi,
            'mahasiswa_selesai_laporan'=>$mahasiswa_selesai_laporan,
            'angkatan'=>$angkatan
        ]);
    }

    public function insight(Request $request)
    {
        $angkatan = User::get()->where('role','mahasiswa')->where('angkatan',$request->angkatan);
        return view('dashboard.insight_angkatan',[
            'angkatan' => $angkatan
        ]);
    }
}
