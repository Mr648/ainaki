<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    //
    protected $fillable = [
        'warrantyable_id',
        'warrantyable_type',
        'period',
        'company',
    ];

    public function warrantyable()
    {
        return $this->morphTo();
    }
}
