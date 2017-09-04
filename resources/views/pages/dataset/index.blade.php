@extends('layouts.app')
@section('title','Διαθέσιμοι πίνακες')
@section('content')
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">--}}
    {{--@foreach($dataset as $datasets)--}}
    {{--<a id="listLI" href="{{route('dataset.show' , $datasets->id)}}">{{$datasets->name}}</a><br>--}}
    {{--@endforeach--}}
    {{--<br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-8">
                <div class="col-md-4">
                    <a href="{{route('index')}}" class="btn btn-primary">Επιστροφή στην αρχική σελίδα</a>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{{route('result.index')}}" class="btn btn-default"><span
                            class="glyphicon glyphicon-folder-open"></span> Δείτε τις προηγούμενες επεξεργασίες</a>
            </div>
        </div>
        <div class="row"><br></div>
        <hr>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <ul id="listUL">
                    @foreach ($dataset as $datasets)
                        <li class="{{ Request:: is($datasets->name) ? "active" : ""}}">
                            <a id="listLI" href="{{route('dataset.show' , $datasets->id)}}">{{$datasets->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <hr>
            </div>
        </div>
    </div>
    <div class="row"><br><br><br><br><br><br></div>
    <style>
        .active {
            background-color: #CBC6C6; /* active color */
        }

        #listUL {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1; /* xrwmma tou box apo to nav bar */
        }

        #listLI {
            display: block;
            color: #463F3F; /* xrwmma grammatwn apo to box tou nav */
            padding: 8px 16px;
            text-decoration: none;
        }

        listLI.active {
            background-color: #4CAF50;
            color: white;
        }

        /* Change the link color on hover */
        #listLI:hover {
            background-color: #555;
            color: white;
        }
    </style>
@endsection