<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main(){
        return view('home');
    }

    public function regist(){
        return view('register');
    }
}
