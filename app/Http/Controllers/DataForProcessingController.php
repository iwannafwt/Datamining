<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class DataForProcessingController extends Controller
{
    public function setData(Request $request) {

        Storage::put('data.txt', $request);
        return view('pages.index');
    }

    public function deleteData() {

        Storage::delete('data.txt');
    }
}
