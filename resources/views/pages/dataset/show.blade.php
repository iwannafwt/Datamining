@extends('layouts.app')
@section('title','Πίνακας ')
@section('content')
        <div class="row">
              @include('pages.dataset.navbar')
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <embed src="{{asset($dataset->content)}}" width="100%" height="600"></embed>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <embed src="{{asset($dataset->description)}}" width="100%" height="500px"></embed>
            </div>
        </div>
@endsection
{{--{{dd($dataset)}}--}}