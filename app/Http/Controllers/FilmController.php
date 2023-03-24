<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Film as ModelsFilm;
use Illuminate\Http\Request;
use Illuminate\Models\Film;

class FilmController extends Controller
{
    public function index(){
        $posts=ModelsFilm::all();
        //return response()->json($posts);
        return PostResource::collection($posts);
    }
    public function show($id){
        $post = ModelsFilm::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post);
    }
    public function show2($id){
        $post = ModelsFilm::findOrFail($id);
        return new PostDetailResource($post);
    }
}
