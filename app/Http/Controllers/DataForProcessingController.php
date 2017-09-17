<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\Dataset1;
use App\Dataset2;
use App\DatasetChoice;
use App\EvolutionindexChoice;
use App\KChoice;
use App\ResultFromMatlab;
use App\TrainingsetChoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DataForProcessingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setData(Request $request)
    {
        $this->validate($request, array(
            'dataset' => 'required',
            'from' => 'required',
            'to' => 'required',
            'algorithm' => 'required',
            'k' => 'requiredif:algorithm,knn',
            'trainingSet' => 'required'
        ));
        if (($request->from < 1))  {
            \Session::flash('key' , 'Έχετε βάλει τιμή μικρότερη του 1 στο Test set .');
            return redirect()->route('index');
        }
    /*-----------------------------------------------------------------------------------------------------------------*/
        if ($request->dataset == 1) {
            if (($request->from > 5) || ($request->to > 5)) {
                \Session::flash('key' , 'Έχετε βάλει τιμή μεγαλύτερη του 5 στο Test set . Παρακαλώ κοιτάξτε τον πίνακα για τις τιμές που μπορείτε να βάλετε στο Test set .');
                return redirect()->route('index');
            }
        } elseif ($request->dataset == 2) {
            if( ($request->from > 13) || ($request->to > 13)) {
                \Session::flash('key' , 'Έχετε βάλει τιμή μεγαλύτερη του 2 στο Test set . Παρακαλώ κοιτάξτε τον πίνακα για τις τιμές που μπορείτε να βάλετε στο Test set .');
                return redirect()->route('index');
            }
        } elseif ($request->dataset == 3) {
            if( ($request->from > 4) || ($request->to > 4)) {
                \Session::flash('key' , 'Έχετε βάλει τιμή μεγαλύτερη του 2 στο Test set . Παρακαλώ κοιτάξτε τον πίνακα για τις τιμές που μπορείτε να βάλετε στο Test set .');
                return redirect()->route('index');
            }
        } else {
            if (($request->from > 6) || ($request->to > 6)) {
                \Session::flash('key' , 'Έχετε βάλει τιμή μεγαλύτερη του 4 στο Test set . Παρακαλώ κοιτάξτε τον πίνακα για τις τιμές που μπορείτε να βάλετε στο Test set .');
                return redirect()->route('index');
            }
        }

        $k = KChoice::where(['id' => $request->k])->first();
        $dataset = DatasetChoice::where(['id' => $request->dataset])->first();
        $algorithm = AlgorithmChoice::where(['id' => $request->algorithm])->first();
        $trainingSet = TrainingsetChoice::where(['id' => $request->trainingSet])->first();

        return view('pages.dataConfirmation.dataConfirmation')
            ->with('dataset', $dataset)
            ->with('from', $request->from)
            ->with('to', $request->to)
            ->with('algorithm', $algorithm)
            ->with('k', $k)
            ->with('trainingSet', $trainingSet)
            ->with('userId', Auth::user()->id);
    }
}
