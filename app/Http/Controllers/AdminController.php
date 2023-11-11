<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function data(){
        $data = Registration::get();

        return view('admin', compact('data'));
    }
}
