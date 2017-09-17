<?php

namespace App\Http\Controllers;

use App\ResultFromMatlab;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProgressBarController extends Controller
{
    public function progressBar(){
        return view('pages.dataConfirmation.progressBar');
    }
}
