<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/articles', [ArticleController::class, 'index']); // redirect to controller
Route::get('/posts', [PostController::class, 'index']); // redirect to controller

Route::get('/categories', [CategoryController::class,'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);


// Route::get('/articles', function () {
//  return 'Article List';
// });

// Route::get('/articles/detail', function () {
//  return 'Article Detail Page';
// })->name('article.detail');

// // dynamic route
// Route::get('/articles/detail/{id}', function ( $id ) {
//  return "Article Detail - $id";
// });
// // redirect
// Route::get('/articles/more', function() {
//  return redirect('/articles/detail');
// });





