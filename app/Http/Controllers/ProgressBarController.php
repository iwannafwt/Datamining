<?php

namespace App\Http\Controllers;

use App\ResultFromMatlab;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProgressBarController extends Controller
{
    public function progressBar($countData){
        return view('pages.dataConfirmation.progressBar')->with('count' , $countData);
    }

    public function count($oldCount){
       $newCount = ResultFromMatlab::all()->count();

       if ($oldCount == $newCount){
           return redirect()->route('progressBar' , $oldCount);
       }else{
           return redirect()->route('result.index');
       }
    }
}
