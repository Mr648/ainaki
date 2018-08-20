<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = [
        'ainaki_user_id',
        'commentable_id',
        'commentable_type',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo('App\AinakiUser', 'ainaki_user_id');
    }


    public function commentable()
    {
        return $this->morphTo();
    }
}
