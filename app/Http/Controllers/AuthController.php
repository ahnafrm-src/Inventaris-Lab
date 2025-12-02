<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    //form login
    public function login()
    {
        if(session("user_id")){
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    //proses login
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password) ){
            return back()->withErrors([
                'email' => 'Email atau password salah'
            ])->withInput();
        }

        //simpan session
        session([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_role' => $user->role
        ]);

        return redirect()->route('home')->with('success', 'Login berhasil!');
    }

    //logout
    public function logout()
    {
        session()->flush();
        return redirect()->route('login')->with('success', 'Anda telah logout');
    }
}
