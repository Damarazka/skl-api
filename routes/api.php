<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts',[FilmController::class,'index'])->middleware('auth:sanctum');
Route::get('/posts/{id}',[FilmController::class,'show'])->middleware('auth:sanctum');
Route::get('/posts2/{id}', [FilmController::class, 'show2']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware('auth:sanctum');
;



