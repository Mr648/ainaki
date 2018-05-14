<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrequentAnswerQuestion extends Model
{
    //
    protected $fillable = [
        'question',
        'answer',
    ];
}
