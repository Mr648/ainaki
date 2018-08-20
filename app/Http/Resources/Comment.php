<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'rating'=>$this->rating,
            'user'=>[
                $this->user->name,
                $this->user->photos->path,
            ],
            'comment'=>$this->comment,
            'date'=>$this->created_at,
        ];
    }
}
