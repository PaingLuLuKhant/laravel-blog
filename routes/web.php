<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikeController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/articles', [ArticleController::class, 'index']); // redirect to controller
Route::get('/posts', [PostController::class, 'index']); // redirect to controller



Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/post-list', [UserController::class, 'postList']);
Route::get('/post-by-user   ', [PostController::class, 'postedUser']);
Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);
Route::get('/post/likers', [LikeController::class, 'showPostLikers']);
Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);
Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);

Route::get('/category/{id}', [CategoryController::class, 'showPostsByCategory']);
Route::get('/post/{id}/category', [CategoryController::class, 'showCategoryOfPost']);

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





