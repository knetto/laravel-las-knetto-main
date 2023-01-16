<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('home');
});

Route::resource('naws',App\Http\Controllers\Naw\NawController::class);

Route::resource('vakken',App\Http\Controllers\vakken\vakkenController::class);

Route::resource('resultaat',App\Http\Controllers\resultaat\resultaatController::class);


