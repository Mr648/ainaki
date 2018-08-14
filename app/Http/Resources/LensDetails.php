<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Brand as BrandResource;
use App\Http\Resources\Warranty as WarrantyResource;
use App\Http\Resources\Photo as PhotoResource;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\Tag as TagResource;

class LensDetails extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request)
	{
		$info = json_decode($this->description);
		$description = $info->description;
		$properties = $info->properties;

		return [
			'price' => $this->price,
			'description' => $description,
			'properties' => $properties,
			'images' => PhotoResource::collection($this->photos),
            'online_test_url' => route('product.test', $this->id),
            'add_to_basket_url' => route('shopping.basket', $this->id),
			'specs' => [
				"full" => [
					'name' => json_decode($this->name)->fa,
					'brand' => new BrandResource($this->brand),
					'warranty' => WarrantyResource::collection($this->warranty),
					'category' => new CategoryResource($this->category),
					'gender' => $this->getGender(),
				],
				"lens" => [
					'BC' => $this->BC,
					'DIA' => $this->DIA,
					'color' => $this->color,
					'quantityInPack' => $this->quantityInPack,
					'usePeriod' => $this->usePeriod,
					'waterContent' => $this->waterContent,
				],
			],
			'tags' => TagResource::collection($this->tags),
			'discountPercentage' => $this->discountPercentage,
			'discountPeriod' => $this->discountPeriod,
			'productionDate' => $this->productionDate,
			'comments' => CommentResource::collection($this->comments),
		];
	}
}
