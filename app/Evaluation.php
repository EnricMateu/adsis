<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
protected $fillable = ['language', 'attitude', 'participation', 'learning', 'collaboration', 'meteo', 'user_id'];


public function skillSelfEvaluation()
    {
        $skill= 2;
        return $skill;
    }
}