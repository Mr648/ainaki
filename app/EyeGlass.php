<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EyeGlass extends Model
{
    //

    protected $fillable = [
        'brand_id',
        'warranty_id',
        'category_id',
        'name',
        'price',
        'description',
        'bridgeLength',
        'frameColor',
        'frameColorType',
        'frameShape',
        'frameWidth',
        'gender_id',
        'handleLength',
        'hasBox',
        'lensColor',
        'lensColorType',
        'lensHeight',
        'lensWidth',
        'lensMaterial',
        'weight',
        'discountPercentage',
        'discountPeriod',
        'productionDate',
    ];


    public function warranty()
    {
        return $this->morphOne('App\Warranty', 'warrantyable');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
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

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}
