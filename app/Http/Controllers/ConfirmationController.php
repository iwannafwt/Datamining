<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConfirmationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDataConfirmation(){
        return view('pages.dataConfirmation.dataConfirmation');
    }
}
