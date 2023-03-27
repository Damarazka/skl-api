<?php

namespace App\Http\Controllers;

use App\Http\Resources\RatingResource;
use Illuminate\Http\Request;
use App\Models\rating;


class ratingController extends Controller
{
    public function store(Request $request){
        $request -> validate([
            'film_id' => 'required|exists:films,id',
            'rating_story' => 'required',
            'rating_character' => 'required',
            'rating_background_scene' => 'required',
            'rating_moral_message' => 'required',
        ]);
        $request['user_id'] = auth()->user()->id;

        $rating = Rating::create($request->all());

        //return response()->json($rating);
        return new RatingResource($rating->loadMissing(['evaluator:id,username']));
    }
    public function update(Request $request, $id){
        $request->validate([
            'rating_story' => 'required',
            'rating_character' => 'required',
            'rating_background_scene' => 'required',
            'rating_moral_message' => 'required',
            ]);
        $rating = rating::findOrFail($id);
        $rating->update($request->all());

        return new RatingResource($rating->loadMissing(['evaluator:id,username']));
    }
    public function delete($id){
        $rating = rating::findorFail($id);
        $rating->delete();
        return new RatingResource($rating->loadMissing(['evaluator:id,username']));

    }
}
