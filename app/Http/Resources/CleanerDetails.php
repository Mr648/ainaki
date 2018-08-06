<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Brand as BrandResource;
use App\Http\Resources\Warranty as WarrantyResource;
use App\Http\Resources\Photo as PhotoResource;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\Tag as TagResource;

class CleanerDetails extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $info = json_decode($this->description);
        $description = $info->description;
        $properties = $info->properties;

        return [
            'name' => $this->name,
            'category' => new CategoryResource($this->category),
            'brand' => new BrandResource($this->brand),
            'warranty' => new WarrantyResource($this->warranty),
            'price' => $this->price,
            'properties' => $properties,
            'buy_url' => route('/'), // change to product.buy
            'images' => PhotoResource::collection($this->photos),
            'description' => $description,
            'comments' => CommentResource::collection($this->comments),
            'atrributes' => [
                "مشخصات محصول" =>[
                    'name' => $this->name,
                    'volume' => $this->bridgeLength, // bridgeLength
                ],
                "سایر مشخصات" => [
                    //
                ]
            ],
            'tags' => TagResource::collection($this->tags),
            'discount' => $this->discountPercentage,
            'discountPeriod' => $this->discountPeriod,
        ];
    }
}
