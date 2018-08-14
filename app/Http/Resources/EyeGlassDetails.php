<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Brand as BrandResource;
use App\Http\Resources\Warranty as WarrantyResource;
use App\Http\Resources\Photo as PhotoResource;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\Tag as TagResource;

class EyeGlassDetails extends JsonResource
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
					'category' => new CategoryResource($this->category),
					'brand' => new BrandResource($this->brand),
					'warranty' =>  WarrantyResource::collection($this->warranty),
					'suitable_for' => $this->getGender(),
					'weight' => $this->weight,
				],
				"frame" => [
					'bridge_length' => $this->bridgeLength,
					'color' => $this->frameColor,
					'color_type' => $this->frameColorType,
					'width' => $this->frameWidth,
					'handle_length' => $this->handleLength,
					'shape' => $this->frameShape,
				],
				"lens" => [
					'color' => $this->lensColor,
					'color_type' => $this->lensColorType,
					'width' => $this->lensWidth,
					'height' => $this->lensHeight,
					'material' => $this->lensMaterial
				],
				"other" => [
					'with' => strlen($this->hasBox) != 0 ? $this->hasBox : false
				]
			],
			'tags' => TagResource::collection($this->tags),
			'discount_percentage' => $this->discountPercentage,
			'discount_period' => $this->discountPeriod,
			'comments' => CommentResource::collection($this->comments),
		];
	}
}
