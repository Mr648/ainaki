<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AinakiUser extends Model
{
    //
    protected $fillable = [
        'name',
        'family',
        'birthday',
        'role',
        'username',
        'password',
        'phone',
        'email',
    ];

    public function authSms(){
        return $this->hasOne('App\SmsAuth');
    }

    public function photos()
    {
        return $this->morphOne('App\Photo','imageable');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite' ,'ainaki_user_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }


}
