@extends('main')
@section('content')

    <div class="jumbotron">
        <p>Graduation Project </p>
    </div>
    <div class="row">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2">Choose a DataSet</label>
                <div class="col-xs-3 selectContainer">
                    <select class="form-control" name="dataset">
                        <option value="" hidden=""></option>
                        <option value="">Dataset1</option>
                        <option value="s">Dataset2</option>
                    </select>
                 </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Choose an Algorithm</label>
                <div class="col-xs-3 selectContainer">
                    <select class="form-control" name="dataset">
                        <option value="" hidden=""></option>
                        <option value="">KNN</option>
                        <option value="s">Decision trees</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-4">
                    <button type="submit" class="btn btn-default">Run</button>
                </div>
            </div>
        </form>
    </div>


    {{--{!! Form::open(['route' => 'setdata', 'method' => 'POST']) !!}--}}
    {{--{{ Form::label('name', 'Name:') }}--}}
    {{--{{ Form::text('name', null, ['class' => 'form-control']) }}--}}

    {{--{{ Form::submit('save tha data', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}--}}

    {{--{!! Form::close() !!}--}}
@endsection