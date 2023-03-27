<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'film_id','user_id','rating_story','rating_character','rating_background_scene','rating_moral_message'
    ];
    public function evaluator():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
