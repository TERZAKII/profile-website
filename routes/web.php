<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Post;
use App\Http\Controllers\BlogController;
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


Route::get('/post/create',function(){
    DB::table('Post')->insert([
        'title' => 'My Post Database',
        'body' => 'Connecting phpMyAdmin to database'
    ]);
});


// Route::get('/post',function(){
//     $post = Post::find(1);
//     // return $post->title;
//     return $post;
// });


Route::get('/post',[BlogController::class,'index']);