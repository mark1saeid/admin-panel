<?php

use App\Http\Controllers\Api\MainApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\TagApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;

/*
Route::post('registration', [UserApiController::class, 'store']);
Route::post('login', [UserApiController::class, 'login']);
Route::post('forgot-password', [UserApiController::class, 'forgotPassword']);
// Route::get('show/{id}', [UserApiController::class, 'show']);

Route::get('authors/{id}', [UserApiController::class, 'show']);
Route::get('authors/{id}/hosts', [UserApiController::class, 'posts']);
Route::get('authors/{id}/comments', [UserApiController::class, 'comments']);*/

Route::get('mobile', [MainApiController::class, 'index']);

/*
Route::middleware('auth:sanctum')->group(function () {
    Route::post('comments/hosts', [CommentApiController::class, 'store']);
    Route::post('logout', [UserApiController::class, 'logout']);
    Route::post('update-password',[UserApiController::class, 'updatePassword']);
});*/
