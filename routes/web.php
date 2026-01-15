<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LikeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

Route::get('/special-user', function () {
    return 'Special User Page - Only special users can access';
})->middleware('check.name');

Route::middleware('auth')->group(function () {
	Route::get('/articles/create', [ArticleController::class, 'create']);
	Route::post('/articles/store', [ArticleController::class, 'store']);
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/articles/update/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);










Route::get('/articles', [ArticleController::class, 'index']); // redirect to controller
Route::get('/posts', [PostController::class, 'index']); // redirect to controller



Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/test-relation', [UserController::class, 'index']);
// Route::get('/profile', [ProfileController::class, 'index']);
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







require __DIR__.'/auth.php';
