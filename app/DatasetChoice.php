<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatasetChoice extends Model
{
    public function dataset()
    {
        return $this->hasMany('App\ResultFromMatlab');
    }
}
