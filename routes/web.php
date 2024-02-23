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