@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Το αρχείο μου.</h2>
            </div>
            <div class="col-md-3">
                <a href="{{route('index')}}" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span> Επιστροφή πίσω για επεξεργασία δεδομένων</a>
            </div>
        </div>
        <p>Εδώ μπορείτε να δείτε τα αποτελέσματα από προηγούμενες επεξεργασίες δεδομένων</p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Ημερομηνία που δημιουργήθηκε το αρχείο</th>
                <th>Αλγόριθμος που χρησιμοποιήθηκε</th>
                <th>Dataset που χρησιμοποιήθηκε</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $results)
                <tr>
                    <td>{{$results->created_at}}</td>
                    <td>{{$algorithm_id[$results->dataset -1 ]->name}}</td>
                    <td>{{$dataset_id[$results->dataset -1 ]->name}}</td>
                    <td><a href="{{route('result.show' , $results->id)}}" class="glyphicon glyphicon-share"
                           aria-hidden="true"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div id='progressbar1'></div>

    <style>
        .progressbar {
            width: 80%;
            margin: 25px auto;
            border: solid 1px #000;
        }
        .progressbar .inner {
            height: 15px;
            animation: progressbar-countdown;
            /* Placeholder, this will be updated using javascript */
            animation-duration: 40s;
            /* We stop in the end */
            animation-iteration-count: 1;
            /* Stay on pause when the animation is finished finished */
            animation-fill-mode: forwards;
            /* We start paused, we start the animation using javascript */
            animation-play-state: paused;
            /* We want a linear animation, ease-out is standard */
            animation-timing-function: linear;
        }
        @keyframes progressbar-countdown {
            0% {
                width: 100%;
                background: #0F0;
            }
            100% {
                width: 0%;
                background: #F00;
            }
        }
    </style>

    <script>
        /*
         *  Creates a progressbar.
         *  @param id the id of the div we want to transform in a progressbar
         *  @param duration the duration of the timer example: '10s'
         *  @param callback, optional function which is called when the progressbar reaches 0.
         */
        function createProgressbar(id, duration, callback) {
            // We select the div that we want to turn into a progressbar
            var progressbar = document.getElementById(id);
            progressbar.className = 'progressbar';

            // We create the div that changes width to show progress
            var progressbarinner = document.createElement('div');
            progressbarinner.className = 'inner';

            // Now we set the animation parameters
            progressbarinner.style.animationDuration = duration;

            // Eventually couple a callback
            if (typeof(callback) === 'function') {
                progressbarinner.addEventListener('animationend', callback);
            }

            // Append the progressbar to the main progressbardiv
            progressbar.appendChild(progressbarinner);

            // When everything is set up we start the animation
            progressbarinner.style.animationPlayState = 'running';
        }

        addEventListener('load', function() {
            createProgressbar('progressbar1', '10s', function() {
                alert('10s progressbar is finished!');
            });
        });
    </script>
@endsection