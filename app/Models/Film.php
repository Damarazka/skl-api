<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;



class Film extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'main_genre',
        'synopsis',
        'author'
    ];
    public function writer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class, 'film_id', 'id');
    }
}
