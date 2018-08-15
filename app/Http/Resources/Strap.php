<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Strap extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'price' => $this->price,
			'photos' => PhotoResource::collection($this->photos),
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		];
	}
}
