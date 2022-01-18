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
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, [
            'name' =>'required|max:225',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'role'=> 'required',
            'password' => 'required|confirmed'
        ]);
        //store user
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>Hash::make($request->password)
        ]);
        //Sign the user in
        auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard.mahasiswa');
        //redirect
    }
}
