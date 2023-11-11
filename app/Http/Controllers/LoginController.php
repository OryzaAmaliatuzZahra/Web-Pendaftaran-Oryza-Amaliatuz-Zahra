<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'username'      => 'required',
            'password'      => 'required',
        ]);

        $data = [
            'username'      => $request->username,
            'password'      => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.data');
        }else{
            return redirect()->route('login')->with('failed', 'Username atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }
}
