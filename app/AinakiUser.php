<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AinakiUser extends Model
{
    //

    public function photos(){
        return $this->morphMany("App\Photo");
    }
}
