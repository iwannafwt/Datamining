@extends('layouts.app')
@section('title','Πίνακας ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <embed src="{{asset($dataset->location)}}" width="100%" height="500"></embed>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{--{{dd($dataset)}}--}}