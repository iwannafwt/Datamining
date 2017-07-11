@extends('main')
@section('content')
    <!-------------------- Form -------------------------------------------------------------------->
    <div class="row">
        <div class="col-md-3">
            <ul id = "listUL">
                <li class="{{ Request:: is('theory') ? "active" : ""}}"><a id = "listLI" href="{{route('theory')}}">Θεωρία</a></li>
                <li class="{{ Request:: is('knn') ? "active" : ""}}"><a id = "listLI" href="{{route('knn')}}">Αλγόριθμος Κ πλησιέστερων Γειτώνων</a></li>
                <li class="{{ Request:: is('decisionTrees') ? "active" : ""}}"><a id = "listLI" href="{{route('decisionTrees')}}">Δένδρα απόφασης</a></li>
                <li class="{{ Request:: is('bayes') ? "active" : ""}}"><a id = "listLI" href="{{route('bayes')}}">Θεώρημα Bayes</a></li>
            </ul>
        </div>
        @yield('theory')
    </div>

    <style>
        .active{
            background-color: #CBC6C6; /* active color */
        }

        #listUL {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;  /* xrwmma tou box apo to nav bar */
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