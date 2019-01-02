<?php

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


use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    if (Session::has("usuario")) {
        return view('pages.home');
    }
    return redirect('login');
});
Route::resource('login', 'UsuarioController');
Route::post('login', 'UsuarioController@login');
Route::get('home', function (){
    dd(session("email"));
});
