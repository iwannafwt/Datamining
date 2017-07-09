@extends('pages.index.index')
@section('form')
{!! Form::open(['route'=>'setdata','method'=>'PUT'])!!}
<div class="form-group">
    {{ Form::label('dataset', 'Επιλέξτε DataSet:',array('class'=>'col-xs-3 control-label')) }}
    <div class="col-xs-2 selectContainer">
        {{ Form::select('dataset',['dataset1' => 'dataset1', 'dataset2' => 'dataset2'],null,array('class'=>'form-control'))}}
    </div>
</div>
<div class="form-group">
    {{ Form::label('algorithm', 'Επιλέξτε Αλγόρυθμο:',array('class'=>'col-xs-3 control-label')) }}
    <div class="col-xs-2 selectContainer">
        {{ Form::select('algorithm',['knn' => 'knn', 'Bayes' => 'bayes'],null,array('class'=>'form-control'))}}
    </div>
</div>
<div class="form-group">
    {{ Form::label('trainingSet', 'Επιλέξτε το training Set:',array('class'=>'col-xs-3 control-label')) }}
    <div class="col-xs-2 selectContainer">
        {{ Form::select('trainingSet',['Tr1' => 'tr1', 'Tr2' => 'tr2,','Tr3' => 'tr3'],null,array('class'=>'form-control'))}}
    </div>
</div>
<div class="form-group">
    {{ Form::label('evolutionIndex', 'Επιλέξτε δείκτη απόδοσης:',array('class'=>'col-xs-3 control-label')) }}
    <div class="col-xs-2 selectContainer">
        {{ Form::select('evolutionIndex',['accuracy' => 'Αccuracy', 'errorRate' => 'Error Rate' , 'sensitivity' => 'Sensitivity','specificity' => 'Specificity'],null,array('class'=>'form-control'))}}
    </div>
</div>
@yield('knnPara')
<div class="form-group">
    {{ Form::submit('Εκτέλεση', array('class' => 'btn btn-success  col-xs-offset-4','style'=>'margin-top:20px')) }}
</div>
{!! Form::close() !!}
@endsection