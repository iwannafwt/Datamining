<?php

namespace App\Http\Controllers;

use App\ResultFromMatlab;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProgressBarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function progressBar($countData){
        return view('pages.dataConfirmation.progressBar')->with('count' , $countData);
    }

    public function count($oldCount){
       $newCount = ResultFromMatlab::where('UserId', Auth::user()->id)->count();

       if ($oldCount == $newCount){
           return redirect()->route('progressBar' , $oldCount);
       }else{
           return redirect()->route('result.index');
       }
    }
}
