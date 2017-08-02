<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;

class EnableMatlabController extends Controller
{
    public function enableMatlab()
    {
        exec('matlab -r show(1,1,1)');
//        Artisan::call('enable-matlab');
    }

    /** apla gia na min exei 8ema me to onoma tin ekana rename. Replace tin panw kanw atm */
    public function enableMatlabForUpdate(Request $request)
    {
        $checkalg = $request->algorithm;
        if ($checkalg == 2){  //TODO statikos tropos gia na pernw to KNN . na allaksei
            Artisan::call('Enable:Knn', array(
                    'dataset' => $request->dataset,
                    'k' => $request->k,
                    'trainingset' => $request->trainingset,
                    'evolutionindex' => $request->evolutionindex)
            );
        }else{
            Artisan::call('Enable:Bayes', array(
                    'dataset' => $request->dataset,
                    'algorithm' => $request->algorithm,
                    'trainingset' => $request->trainingset,
                    'evolutionindex' => $request->evolutionindex)
            );
        }
    }
}