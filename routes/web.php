<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/GSLC2', function () {
    return view('JGN-DI-PUSH');
});

Route::get('profile/{name}', function($name){
    $nim_kenzio = 1;
    $nim_grady = 1;
    $nim_ivo = 0;
    return view('profile/'.strtolower($name), ["name"=>strtolower($name)], compact('nim_grady','nim_kenzio','nim_ivo'));
}
);
