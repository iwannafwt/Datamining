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
            $data = [$request->dataset, $request->algorithm];
            return view('pages.forms.form')->with('data', $data);
        } else {
            $data = [$request->dataset, $request->algorithm];
            Storage::put('general.txt', $data);
        }
        return view('pages.index');
    }

    public function storeKnnData(Request $request)
    {
        $dataset = $request->dataset;
        $algorithm = $request->algorithm;
        $data = [$dataset, $algorithm, $request->k];

        Storage::put('general.txt', $data);
        return view('pages.index');
    }

    public function enableMatlab()
    {
        Artisan::call('enable-matlab');
    }

    public function deleteData()
    {
        Storage::delete('dataset.txt');
        Storage::delete('dataalg.txt');
    }
}
