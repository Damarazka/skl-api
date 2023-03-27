<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_id','user_id','rating_story','rating_character','rating_background_scene','rating_moral_message'
    ];
}
