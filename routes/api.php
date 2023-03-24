<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts',[FilmController::class,'index']);
Route::get('/posts/{id}',[FilmController::class,'show']);
Route::get('/posts2/{id}', [FilmController::class, 'show2']);
Route::post('/login', [AuthenticationController::class, 'login']);


