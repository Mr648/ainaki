<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    protected $fillable = [
        'name',
        'country',
        'description',
    ];

    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }
}
