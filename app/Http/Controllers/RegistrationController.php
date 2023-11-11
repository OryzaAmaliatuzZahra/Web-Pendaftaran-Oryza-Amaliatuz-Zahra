<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Notifications\RegistrationNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function registration(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'nama'      => 'required',
            'alamat'    => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['alamat'] = $request->alamat;

        $user = Registration::create($data);

        // $user->Mail::to($data['alamat'])->send(new RegistrationNotification())
        $user->notify(new RegistrationNotification());
        // Notification::send

        return redirect()->route('index')->with('success', 'Anda berhasil Mendaftar');
    }
}
