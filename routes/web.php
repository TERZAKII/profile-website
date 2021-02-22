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



Route::get('/main', function(){
    return view('main');
})->name('main');

Route::get('/word', function(){
    return view('word');
})->name('word');

Route::get('/aboutMe', function(){
    return view('aboutMe');
})->name('aboutMe');

Route::get('/contactUs', function(){
    return view('contactUs');
})->name('contactUs');