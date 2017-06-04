<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class DataForProcessingController extends Controller
{
    public function setData(Request $request) {

        Storage::put('dataset.txt', $request->dataset);
        Storage::put('dataalg.txt', $request->algorithm);
        return view('pages.index');
    }

    public function deleteData() {

        Storage::delete('dataset.txt');
        Storage::delete('dataalg.txt');
    }
}
