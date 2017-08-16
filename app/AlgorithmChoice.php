<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlgorithmChoice extends Model
{
    public function algorithm()
    {
        return $this->hasMany('App\ResultFromMatlab');
    }
}
