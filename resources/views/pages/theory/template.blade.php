@extends('layouts.app')
@section('title','Θεωρία')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <ul id="listUL">
                @foreach ($theory as $theories)
                    <li class="{{ Request:: is($theories->name) ? "active" : ""}}"><a id="listLI"
                                               href="{{route('theory.show' , $theories->id)}}">{{$theories->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="col-md-13">
            @yield('theory')
        </div>
    </div>
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