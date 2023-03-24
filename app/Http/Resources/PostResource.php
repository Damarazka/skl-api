<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'main_genre'=>$this->main_genre,
            'synopsis'=>$this->synopsis,
            'author_id'=>$this->author,
            'created_at' => date_format($this->created_at, "Y/m/d H:i:s"),
        ];
    }
}
