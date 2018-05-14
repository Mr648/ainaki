<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $fillable = [
        'ainaki_user_id',
        'favoriteable_id',
        'favoriteable_type',
    ];

    public function user()
    {
        return $this->belongsTo('App\AinakiUser');
    }

    public function favoriteable()
    {
        return $this->morphTo();
    }
}
