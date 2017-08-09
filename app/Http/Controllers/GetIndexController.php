<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\DatasetChoice;
use App\EvolutionindexChoice;
use App\KChoice;
use App\TrainingsetChoice;
use Illuminate\Http\Request;

use App\Http\Requests;

class GetIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
        $datasetchoice = DatasetChoice::all();
        $algorithm = AlgorithmChoice::all();
        $k = KChoice::all();
        $trainingset = TrainingsetChoice::all();
        $evolutionindex = EvolutionindexChoice::all();

        return view('pages.index.index')
            ->with('dataset' , $datasetchoice)
            ->with('algorithm' , $algorithm)
            ->with('k' , $k)
            ->with('trainingset' , $trainingset)
            ->with('evolutionindex' , $evolutionindex)
            ;
    }
}
