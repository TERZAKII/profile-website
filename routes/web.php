<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Post;
use App\Models\Form;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LocalizationController;

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


Route::get('/post',function(){
    $post = Post::find(2);//find(ID)
    return $post->title;
    // return $post;
});


Route::get('/blog/index',[BlogController::class,'index']);

Route::get('/blog/create', function(){
    return view('blog.create');
}); 

Route::post('/blog/create',[BlogController::class,'store'])->name('add_post');


Route::get('post/{id}',[BlogController::class,'getPost']);


//Lab8
Route::post('/upload', [UploadFileController::class, 'uploadsubmit']);
Route::get('/upload', [UploadFileController::class, 'uploadform']);

//Lab8.2
Route::get('/send', [MailController::class, 'send']);

//Lab9(Localization)
Route::get('/{lang}',function($lang){
    App::setlocale($lang);
    return view('project');
});

//Lab9(2nd way:Localization)
// Route::get('/{lang}',[LocalizationController::class, 'index']);

//Project
Route::get('/Project', function(){
    return view('Project');
}); 
Route::post('/Project',[BlogController::class,'store'])->name('add_post');