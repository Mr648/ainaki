<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsAuth extends Model
{
    //
    protected $fillable=[
        'authentication_code',
        'authenticated',
    ];

    public function user(){
       return $this->belongsTo('App/AinakiUser');
    }
}
