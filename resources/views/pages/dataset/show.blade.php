@extends('pages.index.index')
@section('dataset')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <embed src="{{asset($dataset->location)}}" width="70%" height="600"></embed>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{--{{dd($dataset)}}--}}