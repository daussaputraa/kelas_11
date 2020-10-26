<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekController extends Controller
{
    public function index(){
        $var = "Firdaus";

        return view('cek', [
            'nama' => $var,
            'alamat' => "Tangerang"
        ]);
    }
}
