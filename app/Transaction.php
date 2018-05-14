<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //


    protected $fillable = [
        'ainaki_user_id',
        'transactionable_id',
        'transactionable_type',
        'refId',
    ];

    public function transactionable()
    {
        return $this->morphTo();
    }
}
