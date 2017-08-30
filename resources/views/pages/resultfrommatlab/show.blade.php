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
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>sen</th>
                    <th>spe</th>
                    <th>fpr</th>
                    <th>fnr</th>
                    <th>lrp</th>
                    <th>lrn</th>
                    <th>pre</th>
                    <th>npv</th>
                    <th>acu</th>
                    <th>era</th>
                    <th>Fsc</th>
                    <th>TP</th>
                    <th>FP</th>
                    <th>FN</th>
                    <th>TN</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{str_limit($result->sen ,$limit=7)}}</td>
                    <td>{{str_limit($result->spe,$limit=7)}}</td>
                    <td>{{str_limit($result->fpr,$limit=7)}}</td>
                    <td>{{str_limit($result->fnr,$limit=7)}}</td>
                    <td>{{str_limit($result->lrp,$limit=7)}}</td>
                    <td>{{str_limit($result->lrn,$limit=7)}}</td>
                    <td>{{str_limit($result->pre,$limit=7)}}</td>
                    <td>{{str_limit($result->npv,$limit=7)}}</td>
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
        <!--------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col md-12">
                <div id="chart-div"></div>
                @scatterchart('Knn', 'chart-div')
            </div>
            {{--<div class="col md-12"><br><br><br><br></div>--}}
            <div class="col md-12">
                <div id="chart-div2"></div>
                @scatterchart('IDX', 'chart-div2')
            </div>
            {{--<div class="col-md-6">--}}
                {{--<h6>Στοιχεία που χρησιμοποιήθηκαν</h6>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection