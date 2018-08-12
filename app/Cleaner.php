<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    //

    protected $fillable = [
        'brand_id',
        'warranty_id',
        'category_id',
        'name',
        'description',
        'volume',
        'discountPercentage',
        'discountPeriod',
    ];

    public function warranty()
    {
        return $this->morphOne('App\Warranty', 'warrantyable');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function accessoryPackage()
    {
        return $this->belongsTo('App\AccessoryPackage');
    }

    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function tags()
    {
        return $this->morphMany('App\Tag', 'taggable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function transactions()
    {
        return $this->morphMany('App\Transaction', 'tarnsactionable');
    }


    public function favorites()
    {
        return $this->morphMany('App\Favorite', 'favoriteable');
    }

	public function brand()
	{
		return $this->belongsTo('App\Brand');
	}
}
