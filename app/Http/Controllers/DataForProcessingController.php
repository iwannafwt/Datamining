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
    public function setData(Request $request) {

        Storage::put('dataset.txt', $request->dataset);
        Storage::put('dataalg.txt', $request->algorithm);

        //call console
//        Artisan::call('enable-matlab');


//        if($request->dataset == 'datase1'){
//            $dataset = Dataset1::all();
//        }else{
//            $dataset = Dataset2::all();
//        }

        return view('pages.index');
//            ->with('dataset' , $request->dataset)
//            ->with('algorithm' , $request->algorithm)
//            ->with('data' , $dataset);
    }

    public function enableMatlab(){
        Artisan::call('enable-matlab');
    }

    public function deleteData() {

        Storage::delete('dataset.txt');
        Storage::delete('dataalg.txt');
    }
}
