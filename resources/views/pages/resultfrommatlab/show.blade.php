@extends('layouts.app')
@section('title','Αποτελέσματα')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                {!! Form::open(['route'=>['result.index'] , 'method'=>'GET']) !!}
                {!! Form::submit('Επιστροφή πίσω' , ['class' => 'btn btn-primary ']) !!}
                {!! Form::close() !!}
            </div>

            <div class="col-xs-1">
                {!! Form::open(['route'=>['result.destroy' , $result->id ] , 'method'=>'DELETE']) !!}
                {!! Form::submit('Διαγραφή' , ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <br>
        <hr>
        <!-------------------------------------------------------------------------------------------->
        <h5>Ημερομηνία :</h5>{{$result->created_at}}
        <hr>
        <!-------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------------->
        <div class="row">
            <div class="container">
                <p>Στοιχεία που χρησιμοποιήθηκαν</p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="16.6%">Πίνακας</th>
                        <th width="16.6%">Κλάσης πινακα</th>
                        <th width="16.6%">Αλγόριθμος</th>
                        <th width="23.2%">Από ποιά στήλη : μέχρι ποιά στήλη του πίνακα επιλέχτηκε</th>
                        <th width="10%">K</th>
                        <th width="16.6%">Training set</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td>{{$dataset_id[$result->dataset -1 ]->name}}</td>
                    <td>{{$dataset_id[$result->dataset -1 ]->class}}</td>
                    <td>{{$algorithm_id[$result->algorithm-1 ]->name}}</td>
                    <td>{{$result->fromvar}} : {{$result->tovar}}</td>
                    <td>{{$result->k1}}</td>
                    <td>{{$result->trainingset}}</td>
                    </tbody>
                </table>
                <hr>
                <br>
            </div>
            <!------------------------------------------------------------------------------------------------>
            <div class="row">
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="14.28%">Accuracy(acu)</th>
                            <th width="14.28%">Error rate(era)</th>
                            <th width="14.28%">F-score(Fsc)</th>
                            <th width="14.28%">True positive(TP)</th>
                            <th width="14.28%">False positive(FP)</th>
                            <th width="14.28%">False negative(FN)</th>
                            <th width="14.28%">True negative(TN)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{str_limit($result->acu,$limit=7)}}</td>
                            <td>{{str_limit($result->era,$limit=7)}}</td>
                            <td>{{str_limit($result->Fsc,$limit=7)}}</td>
                            <td>{{str_limit($result->TP,$limit=7)}}</td>
                            <td>{{str_limit($result->FP,$limit=7)}}</td>
                            <td>{{str_limit($result->FN,$limit=7)}}</td>
                            <td>{{str_limit($result->TN,$limit=7)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Sensitivity(sen)</th>
                        <th width="10%">Specificity(spe)</th>
                        <th width="10%">False positive rate(fpr)</th>
                        <th width="10%">False negative rate(fnr)</th>
                        <th width="10%">Likelihood ratio positive(lrp)</th>
                        <th width="10%">Likelihood ratio negative(lrn)</th>
                        <th width="10%">Precision(pre)</th>
                        <th width="10%">Negative predictive valu(npv)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{str_limit($result->sen ,$limit=9)}}</td>
                        <td>{{str_limit($result->spe,$limit=9)}}</td>
                        <td>{{str_limit($result->fpr,$limit=9)}}</td>
                        <td>{{str_limit($result->fnr,$limit=9)}}</td>
                        <td>{{str_limit($result->lrp,$limit=9)}}</td>
                        <td>{{str_limit($result->lrn,$limit=9)}}</td>
                        <td>{{str_limit($result->pre,$limit=9)}}</td>
                        <td>{{str_limit($result->npv,$limit=9)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-------------------------------------------------------------------------------------------------->
        <div class="container">
            <div class="row">
                <div id="chart-div"></div>
                @scatterchart('C2', 'chart-div')

                {{--<div class="col md-12"><br><br><br><br></div>--}}
                <div id="chart-div2"></div>
                @scatterchart('IDX', 'chart-div2')
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('images/' . $result->image)}}" height="500" width="1000">
                </div>
            </div>
        </div>
    </div>
@endsection