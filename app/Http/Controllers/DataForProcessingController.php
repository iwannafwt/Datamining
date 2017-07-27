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
            'k' =>'requiredif:algorithm,knn',
            'trainingSet' => 'required',
            'evolutionIndex' => 'required'
        ));

        $data = [$request->dataset, " ", $request->algorithm, " ", $request->trainingSet, " ", $request->evolutionIndex , " ", $request->k];

        Storage::put('general.txt', $data);

        return view('pages.dataConfirmation.dataConfirmation')->with('dataset', $request->dataset)
                                                ->with('algorithm' , $request->algorithm)
                                                ->with('k' , $request->k)
                                                ->with('trainingSet' ,$request->trainingSet )
                                                ->with('evolutionIndex' , $request->evolutionIndex);
       }
    public function deleteData()
    {
    }
}
