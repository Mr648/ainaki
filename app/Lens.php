<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{


    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');

    }

    public function tags(){
        return $this->morphMany('App\Tag', 'taggable');
    }

    public function comments(){
        return $this->morphMany('App\Comment' , 'commentable');
    }

    public function transactions(){
        return $this->morphMany('App\Transaction' , 'tarnsactionable');
    }
}
