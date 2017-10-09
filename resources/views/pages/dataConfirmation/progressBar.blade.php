@extends('layouts.app')
@section('title','Παρακαλώ περιμένετε . Επεξεργασία δεδομένων.')
@section('content')
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
        <div class="item html">
            <h2>0</h2>
            <svg width="160" height="160">
                <g>
                    <title>Layer 1</title>
                    <circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="8"
                            stroke="#6fdb6f" fill="none"></circle>
                </g>
            </svg>
        </div>
    </div>
@endsection
<script>
    function Redirect() {
//        window.location = "http://localhost:8000/result";
        window.location.href = "{{URL::to('count',($count))}}"
    }
    setTimeout(Redirect, 30000);
    var time = 30;
    /* how long the timer runs for */
    var initialOffset = '440';
    var i = 1;
    var interval = setInterval(function () {
        $('.circle_animation').css('stroke-dashoffset', initialOffset - (i * (initialOffset / time)));
        $('h2').text(i);
        if (i == time) {
            clearInterval(interval);
        }
        i++;
    }, 1000);
</script>

<style>
    .item {
        position: relative;
    }

    .item h2 {
        text-align: center;
        position: absolute;
        line-height: 125px;
        width: 100%;
    }

    svg {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        margin-left:auto;
        margin-right:auto;
        display:block;
    }

    .circle_animation {
        stroke-dasharray: 440; /* this value is the pixel circumference of the circle */
        stroke-dashoffset: 440;
        transition: all 1s linear;
    }
</style>