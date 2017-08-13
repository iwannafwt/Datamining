@extends('pages.theory.template')
@section('theory')
    {{--<div class="container">--}}
    <embed src="{{asset($gettheory->location)}}" width="800px" height="500px"></embed>
    {{--</div>--}}
@endsection
