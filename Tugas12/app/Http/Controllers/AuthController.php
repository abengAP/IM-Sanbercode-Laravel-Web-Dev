<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function data (Request $request){
        $namaDepan = $request->input('firstname');
        $namaBlkang = $request->input('lastname');

        return view('welcome', ['namaDepan' => $namaDepan, 'namaBlkang' => $namaBlkang]);

        
    }
}
