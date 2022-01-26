<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        $pembimbing = User::where('role','pembimbing')->get();

        return view('auth.register',[
            'pembimbings'=>$pembimbing
        ]);
    }
    public function store(Request $request)
    {
        //Validation
        if($request->role == 'mahasiswa'){
            $this->validate($request, [
                'name' =>'required|max:225',
                'email' => 'required|email|max:255',
                'role'=> 'required',
                'nim'=>'required|digits:7',
                'password' => 'required|confirmed',
                'angkatan'=>'required|digits:4'
            ]);
        } else {
            $this->validate($request, [
                'name' =>'required|max:225',
                'email' => 'required|email|max:255',
                'role'=> 'required',
                'password' => 'required|confirmed'
            ]);
        }    
        //store user
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'nim'=>$request->nim,
            'email'=>$request->email,
            'angkatan'=>$request->angkatan,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
            'pembimbing'=>$request->pembimbing
        ]);
        //Sign the user in
        auth()->attempt($request->only('email','password'));

        return redirect()->route('dashboard.mahasiswa');
        //redirect
    }
}