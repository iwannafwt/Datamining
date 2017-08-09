@extends('pages.theory.template')
@section('theory')
    {{--<div class="container">--}}
    <embed src="{{asset($gettheory->location)}}"></embed>
    {{--</div>--}}
@endsection
