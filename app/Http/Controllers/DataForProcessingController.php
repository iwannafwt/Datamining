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
        if ($request->algorithm == 'knn') {
            $dataset = $request->dataset;
            $algorithm = $request->algorithm;
            $trainingSet = $request->trainingSet;
            $evolutionIndex = $request->evolutionIndex;
            return view('pages.index.knnIndex')->with('dataset', $dataset)
                                                    ->with('algorithm' , $algorithm)
                                                    ->with('trainingSet' ,$trainingSet )
                                                    ->with('evolutionIndex' , $evolutionIndex);
        } else {
            $this->storeKnnData($request);
            return view('pages.dataConfirmation.dataConfirmation')->with('dataset', $request->dataset)
                                                                        ->with('algorithm' , $request->algorithm)
                                                                        ->with('trainingSet' ,$request->trainingSet )
                                                                        ->with('evolutionIndex' , $request->evolutionIndex)
                                                                        ->with('k' , $request->k=0);
        }
    }

    public function storeKnnData(Request $request)
    {
        $dataset = $request->dataset;
        $algorithm = $request->algorithm;
        $trainingSet = $request->trainingSet;
        $evolutionIndex = $request->evolutionIndex;
        $k = $request->k;
        $data = [$dataset, " ", $algorithm, " ", $trainingSet, " ", $evolutionIndex, " ", $k];

        Storage::put('general.txt', $data);
        return view('pages.dataConfirmation.dataConfirmation')->with('dataset', $dataset)
                                                                    ->with('algorithm' , $algorithm)
                                                                    ->with('trainingSet' ,$trainingSet )
                                                                    ->with('evolutionIndex' , $evolutionIndex)
                                                                    ->with('k' , $k);
    }

    public function deleteData()
    {
        Storage::delete('dataset.txt');
        Storage::delete('dataalg.txt');
    }
}
