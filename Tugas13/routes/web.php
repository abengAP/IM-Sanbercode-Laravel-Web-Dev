<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function(){
    return view('pages.dashboard');
});

Route::get('/table', function(){
    return view('pages.table');
});

Route::get('/data-tables', function(){
    return view('pages.data');
});

