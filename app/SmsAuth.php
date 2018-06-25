<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsAuth extends Model
{
    //
    protected $fillable=[
        'authentication_code',
        'authKey',
        'authenticated',
    ];

    public function user(){
       return $this->belongsTo('App\AinakiUser', 'ainaki_user_id');
    }
}
