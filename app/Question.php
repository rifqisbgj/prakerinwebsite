<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    public function Option()
    {
        return $this->hasMany('App\QuestionOption');
    }
    public $timestamps = false;
}
