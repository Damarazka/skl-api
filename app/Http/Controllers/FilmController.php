<?php

namespace App\Http\Controllers;

use App\Models\Film as ModelsFilm;
use Illuminate\Http\Request;
use Illuminate\Models\Film;

class FilmController extends Controller
{
    public function index(){
        $posts=ModelsFilm::all();
        return response()->json($posts);
    }
}
