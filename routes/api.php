<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleApiController;

Route::apiResource('articles', ArticleApiController::class);

// Route::get('/articles', [ArticleApiController::class,'index']);
// Route::get('/articles/{id}', [ArticleApiController::class,'detail']);
// Route::post('/articles', [ArticleApiController::class,'create']);
// Route::put('/articles/{id}', [ArticleApiController::class,'update']);
// Route::patch('/articles/{id}', [ArticleApiController::class,'update']);
// Route::delete('/articles/{id}', [ArticleApiController::class,'delete']);