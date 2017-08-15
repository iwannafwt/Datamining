<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultFromMatlab extends Model
{
    public function result(){
        return $this->belongsTo('App\User');
    }
}
