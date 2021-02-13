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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post("/store",[App\Http\Controllers\LibroController::class, 'store'])->name("store");

Route::get("/show", [App\Http\Controllers\LibroController::class, 'show'])->name("show");

Route::delete('/{id}',[App\Http\Controllers\LibroController::class,'LibroController@destroy'])->name("destroy");

Route::get("/a",function(){
    return view('libros');
});