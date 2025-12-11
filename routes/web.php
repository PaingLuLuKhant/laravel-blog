<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
 return 'Article List';
});

Route::get('/articles/detail', function () {
 return 'Article Detail Page';
})->name('article.detail');

// dynamic route
Route::get('/articles/detail/{id}', function ( $id ) {
 return "Article Detail - $id";
});
// redirect
Route::get('/articles/more', function() {
 return redirect('/articles/detail');
});


