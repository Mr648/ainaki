<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AinakiUser extends Model
{
    //
    protected $fillable = [
        'name',
        'family',
        'role',
        'username',
        'password',
        'phone',
        'email',
    ];

    public function photos()
    {
        return $this->morphMany('App\Photo','imageable');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }


}
