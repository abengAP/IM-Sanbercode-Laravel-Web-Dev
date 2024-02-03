<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    
    public function create(){
        return view('pages.cast.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio'  => $request['bio']
        ]);
        return redirect('/cast');
    }

    public function index(){
        $cast = DB::table('cast')->get();
 
        return view('pages.cast.showcast', ['cast' => $cast]);
    }


    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('pages.cast.detail',['cast' => $cast]);

    }
}
