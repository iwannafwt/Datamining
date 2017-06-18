@extends('pages.index')
@section('knnForm')
    {!! Form::open(['route'=>'storeknndata','method'=>'PUT'])!!}
    <div class="form-group">
        <input type="hidden" name="dataset" value="{{ $data[0] }}">
        <input type="hidden" name="algorithm" value="{{ $data[1] }}">

        {{ Form::label('k', 'Επιλέξτε k:',array('class'=>'col-xs-3 control-label')) }}
        <div class="col-xs-2 selectContainer">
            {{ Form::select('k',['k1' => 'k1', 'k2' => 'k2'],null,array('class'=>'form-control'))}}
        </div>
    </div>
    <div class="form-group">
        {{ Form::submit('Run', array('class' => 'btn btn-success  col-xs-offset-4','style'=>'margin-top:20px')) }}
    </div>
    {!! Form::close() !!}
@endsection