<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\DatasetChoice;
use App\KChoice;
use App\ResultFromMatlab;
use App\TrainingsetChoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $databeseValues = DatasetChoice::find($request->dataset);

        if (($request->from < $databeseValues->columnsStart)) {
            \Session::flash('key', 'Έχετε επιλέξει τον πίνακα ' . $databeseValues->value .
                '. Η πρώτη στήλη που μπορείτε να επιλέξετε είναι η στήλη ' . $databeseValues->columnsStart);
            return redirect()->route('index');
        }
        /*-------------------------------------------------------------------------------------------------------------*/
        if (($request->from > $databeseValues->columnsEnd) || ($request->to > $databeseValues->columnsEnd)) {
            \Session::flash('key', 'Έχετε επιλέξει τον πίνακα ' . $databeseValues->value .
                '. Δεν μπορείτε να επιλέξετε τιμή μεγαλύτερη του ' . $databeseValues->columnsEnd);
            return redirect()->route('index');
        }
        /*-------------------------------------------------------------------------------------------------------------*/
        if (($request->from > $request->to)) {
            \Session::flash('key', 'Η πρώτη στήλη δεν μπορεί να είναι μεγαλύτερη της δεύτερης.');
            return redirect()->route('index');
        }
        /*-------------------------------------------------------------------------------------------------------------*/
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
