<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\Dataset1;
use App\Dataset2;
use App\DatasetChoice;
use App\EvolutionindexChoice;
use App\KChoice;
use App\TrainingsetChoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DataForProcessingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setData(Request $request)
    {
        $this->validate($request, array(
            'dataset' => 'required',
            'algorithm' => 'required',
            'k' => 'requiredif:algorithm,knn',
            'trainingSet' => 'required'
        ));
            $k = KChoice::where(['id' => $request->k])->first();
            $dataset = DatasetChoice::where(['id' => $request->dataset])->first();
            $algorithm = AlgorithmChoice::where(['id' => $request->algorithm])->first();
            $trainingSet = TrainingsetChoice::where(['id' => $request->trainingSet])->first();

            return view('pages.dataConfirmation.dataConfirmation')
                ->with('dataset', $dataset)
                ->with('from' , $request->from)
                ->with('to' , $request->to)
                ->with('algorithm', $algorithm)
                ->with('k', $k)
                ->with('trainingSet', $trainingSet)
                ->with('userId' , Auth::user()->id);
    }

    public function deleteData()
    {
    }
}
