@extends('layouts.app')
@section('title','Το αρχείο μου')
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
                    <td>{{$algorithm_id[$results->algorithm -1 ]->name}}</td>
                    <td>{{$dataset_id[$results->dataset -1 ]->value}}</td>
                    <td><a href="{{route('result.show' , $results->id)}}" class="glyphicon glyphicon-share"
                           aria-hidden="true"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection