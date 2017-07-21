<?php

namespace App\Http\Controllers;

use App\Dataset1;
use App\Dataset2;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DataForProcessingController extends Controller
{
    public function setData(Request $request)
    {
        $this -> validate($request,array(
            'dataset' => 'required',
            'algorithm' => 'required',
            'k' =>'required_if:algorithm,knn',
            'trainingSet' => 'required',
            'evolutionIndex' => 'required'
        ));

        $dataset = $request->dataset;
        $algorithm = $request->algorithm;
        $trainingSet = $request->trainingSet;
        $evolutionIndex = $request->evolutionIndex;
        $k = $request->k;

        $data = [$dataset, " ", $algorithm, " ", $trainingSet, " ", $evolutionIndex , " ", $k];

        Storage::put('dataset.txt', $dataset);
        Storage::put('algorithm.txt', $algorithm);
        Storage::put('trainingset.txt', $trainingSet);
        Storage::put('evolutionindex.txt', $evolutionIndex);
        Storage::put('k.txt', $k);
        Storage::put('general.txt', $data);
        return view('pages.dataConfirmation.dataConfirmation')->with('dataset', $dataset)
                                                ->with('algorithm' , $algorithm)
                                                ->with('trainingSet' ,$trainingSet )
                                                ->with('evolutionIndex' , $evolutionIndex)
                                                ->with('k' , $k);
    }
    public function deleteData()
    {
    }

}
