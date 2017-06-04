@extends('main')
@section('content')

    <div class="jumbotron">
        <p>Graduation Project </p>
    </div>
    <div>
        <div class="form-horizontal">
            {!! Form::open()!!}
                <div class="form-group">
                    {!! Form::label('dataset', 'Choose a DataSet:',array('class'=>'col-xs-3 control-label')) !!}
                    <div class="col-xs-2 selectContainer">
                    {!! Form::select('dataset',['dataset1' => 'dataset1', 'dataset2' => 'dataset2'],null,array('class'=>'form-control'))!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('algorithm', 'Choose an Algorithm:',array('class'=>'col-xs-3 control-label')) !!}
                    <div class="col-xs-2 selectContainer">
                    {!! Form::select('algorithm',['knn' => 'Knn', 'decisionTrees' => 'decision trees'],null,array('class'=>'form-control'))!!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Run', array('class' => 'btn btn-success  col-xs-offset-4','style'=>'margin-top:20px')) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection