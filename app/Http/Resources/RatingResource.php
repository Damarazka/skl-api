<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
        'id' => $this->id,
            'rating_story' => $this->rating_story,
            'rating_character' => $this->rating_character,
            'rating_background_scene' => $this->rating_background_scene,
            'rating_moral_message' => $this->rating_moral_message,
            'user_id' => $this->user_id,
            'evaluator' => $this->whenLoaded('evaluator'),
            'created_at' => date_format($this->created_at, "Y/m/d H:i:s"),
        ];
        }
}
