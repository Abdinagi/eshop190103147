<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\ClientController;



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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/cv', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/exam', function () {
    return view('example');
});

Route::get('post/create', function () {
    DB::table('post')->insert([
        'title' => 'example',
        'body' => 'test'
    ]);
});

Route::get('post', function () {
    $post = Post::find(1);
    return $post;
});

Route::get('post', [ClientController::class, 'index']);

Route::get('post/create', function() {
    return view('post.create');
});

Route::post('post/create', [ClientController::class, 'store'])->name('add-post'); 
    
