<?php

namespace App\Http\Controllers;

use App\AlgorithmChoice;
use App\DatasetChoice;
use App\ResultFromMatlab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

use App\Http\Requests;

class ResultFromMatlabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        \Session::flash('time' , 'Τα αποτελέσματα από την επεξεργασία δεδομένων των αλγορίθμων αργούν . 
                                Παρακαλώ κάντε ανανέωση της σελίδας για να εμφανιστούν τα αποτελέσματα. ');
        $result = ResultFromMatlab::where('UserId', Auth::user()->id)->get();
        $algorithm = AlgorithmChoice::all();
        $dataset = DatasetChoice::all();

        return view('pages.resultfrommatlab.index')
            ->with('result', $result)
            ->with('algorithm_id', $algorithm)
            ->with('dataset_id', $dataset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {

        $result = ResultFromMatlab::find($id);
        $algorithm = AlgorithmChoice::all();
        $dataset = DatasetChoice::all();


        $c2After = substr($result->C2, 1, strlen($result->C2) - 2);
        $IDCAfter = substr($result->IDX, 1, strlen($result->IDX) - 2);

        $c2 = array_map('intval', explode(';', $c2After));
        $IDX = array_map('intval', explode(';', $IDCAfter));

        $datatable = Lava::DataTable();
        $datatable->addNumberColumn('C2');
        $datatable->addNumberColumn('');

        for ($i = 0; $i < sizeof($c2); $i++) {
            $datatable->addRow([$i, $c2[$i]]);
        }

        Lava::ScatterChart('C2', $datatable, [
            'width' => 500, /*to megethos tou diagrammatos*/
            'legend' => [
                'position' => 'none'
            ],
            'hAxis' => [
                'title' => 'C2'
            ],
            'vAxis' => [
                'title' => ''
            ],
            'colors' => ['red']
        ]);
        $datatableIDX = Lava::DataTable();
        $datatableIDX->addNumberColumn('IDX');
        $datatableIDX->addNumberColumn('');

        for ($i = 0; $i < sizeof($IDX); $i++) {
            $datatableIDX->addRow([$i, $IDX[$i]]);
        }

        Lava::ScatterChart('IDX', $datatableIDX, [
            'width' => 500, /*to megethos tou diagrammatos*/
            'legend' => [
                'position' => 'none'
            ],
            'hAxis' => [
                'title' => 'IDX'
            ],
            'vAxis' => [
                'title' => ''
            ]
        ]);
        return view('pages.resultfrommatlab.show')
            ->with('dataset_id' , $dataset)
            ->with('algorithm_id' , $algorithm)
            ->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = ResultFromMatlab::find($id);
        $result->delete();
        return redirect()->route('result.index');
    }
}