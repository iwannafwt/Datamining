<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;

class EnableMatlabController extends Controller
{
    public function enableMatlab()
    {
        Artisan::call('enable-matlab');
    }
}
