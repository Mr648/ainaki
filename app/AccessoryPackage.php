<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessoryPackage extends Model
{
    //

    protected $fillable = [
        'name',
        'price',
    ];

    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function straps()
    {
        return $this->hasMany('App\Strap');
    }

    public function cleaners()
    {
        return $this->hasMany('App\Cleaner');
    }

    public function carryingCases()
    {
        return $this->hasMany('App\CarryingCase');
    }

}
