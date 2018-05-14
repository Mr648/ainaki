<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $fillable = [
        'tag',
        'taggable_id',
        'taggable_type',
    ];

    public function taggable()
    {
        return $this->morphTo();
    }
}
