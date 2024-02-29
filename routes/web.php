<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\index;
use App\Http\Controllers\indexController;
use App\Http\Controllers\WelcomeController;
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


///PRAKTIKUM BASIC ROUTING
//point b
Route::get('/hello', function () {
    return 'Hello World';
});

// point d
Route::get('/world', function (){
    return 'World';
});


//membuat route yang menampilkan pesan selamat datang
Route::get('/welcome', function () {
    return 'Selamat Datang ';
});

//Kemudian buatlah route ‘/about’ yang akan menampilkan NIM dan nama Anda.
Route::get('/about', function (){
    return 'NIM = 2241720231 <br> 
    Nama = Lintang Aprillya Sari ';
});


///PRAKTIKUM ROUTE PARAMETERS
//poin a
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

//poin d
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//Kemudian buatlah route /articles/{id} yang akan menampilkan output “Halaman Artikel dengan ID {id}”, ganti id sesuai dengan input dari url.
Route::get('/articles/{id}', function
($id) {
    return 'Halaman artikel dengan ID '.$id;
});


///PRAKTIKUM OPTIONAL PARAMETERS
//poin a
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

//poin d
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});


///PRAKTIKUM ROUTE NAME
//Poin a
Route::get('/user/profile', function(){
    
})->name('profile');

///membuat controller
Route::get('/helloController', 
[WelcomeController::class,'hello']); 

//controller index
Route::get('/indexcontroller', 
[indexController::class,'indexcontroller']);

//controller about
Route::get('/about',
[aboutController::class,'about']);

//controller id
Route::get('/articles/{id}',
 [articlesController::class,'show']);


 ///resource controller
//poin b
Route::resource('photos', PhotoController::class);


//poin d
Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);


///view - membuat view
//poin b
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Lintang']); 
    });

//poin d
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
    ]); 
Route::resource('photos', PhotoController::class)->except([ 
        'create', 'store', 'update', 'destroy' 
        ]); 

Route::get('/greeting', [WelcomeController::class, 'greeting']); 
