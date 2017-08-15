@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Το αρχείο μου.</h2>
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
                    <td>{{$results->algorithm}}</td>
                    <td>{{$results->dataset}}</td>

                    <td><a href="{{route('result.show' , $results->id)}}" class="glyphicon glyphicon-share" aria-hidden="true"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection