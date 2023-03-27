<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
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
            'id'=>$this->id,
            'title'=>$this->title,
            'main_genre'=>$this->main_genre,
            'synopsis'=>$this->synopsis,
            //'author'=>$this->author,
            'author_id' => $this->author,
            'writer' => $this->whenLoaded('writer'),
            'rating_total' => $this->whenLoaded('ratings', function(){
                return count($this->ratings);
            }),
            'ratings' => $this->whenLoaded('ratings', function(){
                return collect($this->ratings)->each(function($rating){
                    $rating->evaluator;
                    return $rating;
                });
            }),
            'created_at' => date_format($this->created_at, "Y/m/d H:i:s"),
        ];
    }
}
