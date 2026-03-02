<?php

use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//    return 'Hello World';
// });

Route::get('/hello', [App\Http\Controllers\WelcomeController::class, 'hello']);

Route::get('/world', function () {
   return 'World';
});

Route::get('/welcome', function () {
   return 'Selamat Datang';
});

Route::get('/about', function () {
   return 'Nama: Nailah Salsabila Maulidiyah | NIM: 222107020120';
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

// Route::get('/user/{name?}', function ($name=null) {
// return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController;
Route::get('/', HomeController::class);

use App\Http\Controllers\AboutController;
Route::get('/about', AboutController::class);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', ArticleController::class);


use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
// 	return view('hello', ['name' => 'Nailah']);
// });

// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Nailah']);
// });

use App\Http\Controllers\WelcomeController;
Route::get('/greeting', [WelcomeController::class, 'greeting']);


