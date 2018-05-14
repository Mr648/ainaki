<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        'ainaki_user_id',
        'question',
        'answer',
        'isAnswered',
    ];

    public function user()
    {
        return $this->belongsTo('App\AinakiUser');
    }
}
