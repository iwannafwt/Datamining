<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultFromMatlab extends Model
{
    public function result(){
        return $this->belongsTo('App\User');
    }

    public function dataset(){
        return $this->belongsTo('App\DatasetChoice');
    }

    public function algorithm(){
        return $this->belongsTo('App\AlgorithmChoice');
    }
}
