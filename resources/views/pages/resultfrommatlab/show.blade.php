@extends('layouts.app')
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
                <td>{{number_format($result->sen , 6)}}</td>
                <td>{{number_format($result->spe, 6)}}</td>
                <td>{{number_format($result->fpr, 6)}}</td>
                <td>{{number_format($result->fnr, 6)}}</td>
                <td>{{number_format($result->lrp, 6)}}</td>
                <td>{{number_format($result->lrn, 6)}}</td>
                <td>{{number_format($result->pre, 6)}}</td>
                <td>{{number_format($result->npv, 6)}}</td>
                <td>{{number_format($result->acu, 6)}}</td>
                <td>{{number_format($result->era, 6)}}</td>
                <td>{{number_format($result->Fsc, 6)}}</td>
                <td>{{number_format($result->TP, 6)}}</td>
                <td>{{number_format($result->FP, 6)}}</td>
                <td>{{number_format($result->FN, 6)}}</td>
                <td>{{number_format($result->TN, 6)}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection