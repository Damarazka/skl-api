<?php

use App\Http\Controllers\FilmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts',[FilmController::class,'index']);
Route::get('/posts/{id}',[FilmController::class,'show']);
