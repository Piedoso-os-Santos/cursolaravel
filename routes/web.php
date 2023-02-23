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
    return view('welcome');
});

Route::get('/empresa',function(){
    return view('site/empresa');
});

// Aprendendo a routa Any, permite todo tipo de acesso
Route::any('/any',function(){
    return 'Permite todo tipo de acesso http  (put,delete,get,post)';
});

Route::match(['get','post'],'/match',function(){
    return 'Permite apenas acessos definidos';
});
