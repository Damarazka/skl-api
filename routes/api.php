<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ratingController;




Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/posts',[FilmController::class,'index']);
    Route::get('/posts/{id}',[FilmController::class,'show']);
    Route::get('/logout', [AuthenticationController::class, 'logout']);
    Route::get('/me', [AuthenticationController::class, 'me']);
    Route::post('/posts', [FilmController::class, 'store']);
    Route::patch('/posts/{id}', [FilmController::class, 'update'])->middleware(['film.owner']);
    Route::delete('/posts/{id}', [FilmController::class, 'delete'])->middleware(['film.owner']);
    Route::post('/rating', [ratingController::class, 'store']);
    Route::patch('/rating/{id}', [ratingController::class, 'update'])->middleware(['rating.owner']);
    Route::delete('/rating/{id}', [ratingController::class, 'delete'])->middleware(['rating.owner']);
});


Route::get('/posts2/{id}', [FilmController::class, 'show2']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/register', [AuthenticationController::class, 'register']);





