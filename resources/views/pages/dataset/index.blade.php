@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($dataset as $datasets)
                            <a id="listLI" href="{{route('dataset.show' , $datasets->id)}}">{{$datasets->name}}</a><br>
                        @endforeach
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection