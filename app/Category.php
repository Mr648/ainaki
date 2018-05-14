<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'parent_id',
        'name',
        'description',
    ];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function eyeglasses()
    {
        return $this->hasMany('App\EyeGlass');
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

    public function lenses()
    {
        return $this->hasMany('App\Lens');
    }

}
