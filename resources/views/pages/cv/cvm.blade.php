@extends('pages.cv.cv')

@section('name')<h1 class="page-title">Βιογραφικό : Μιλένα Αζωίδου </h1>@endsection
@section('foto')<img class="img-circle img-responsive" alt="" src="{{ asset("contactFotos/milena.jpg") }}">@endsection

@section('about')
    <li class="list-group-item">Αζωίδου Μιλένα</li>
    <li class="list-group-item">Web developer</li>
    <li class="list-group-item"><i class="fa fa-phone"></i>6977155214 </li>
    <li class="list-group-item"><i class="fa fa-envelope"></i>milena.14@windowslive.com</li>
@endsection
@section('summary')
    <p>Τόπος καταγωγής : Σέρρες</p>
    <p>Τόπος διαμονής : Σέρρες</p>
@endsection

@section('interests')
    <p></p>
@endsection

@section('skills')
    <div class="progress">
        <div data-placement="top" style="width: 95%;"
             aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"
             class="progress-bar progress-bar-success">
            <span class="sr-only">80%</span>
            <span class="progress-type">PHP</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 95%;"
             aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"
             class="progress-bar progress-bar-success">
            <span class="sr-only">80%</span>
            <span class="progress-type">Css</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 95%;"
             aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"
             class="progress-bar progress-bar-success">
            <span class="sr-only">80%</span>
            <span class="progress-type">Bootstrap</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 95%;"
             aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"
             class="progress-bar progress-bar-success">
            <span class="sr-only">80%</span>
            <span class="progress-type">Html</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 80%;"
             aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"
             class="progress-bar progress-bar-success">
            <span class="sr-only">80%</span>
            <span class="progress-type">PHP/Laravel Framework </span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1"
             role="progressbar" class="progress-bar progress-bar-success">
            <span class="sr-only">70%</span>
            <span class="progress-type">Javascript</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
             role="progressbar" class="progress-bar progress-bar-warning">
            <span class="sr-only">60%</span>
            <span class="progress-type">Java</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
             role="progressbar" class="progress-bar progress-bar-warning">
            <span class="sr-only">60%</span>
            <span class="progress-type">C</span>
        </div>
    </div>
    <div class="progress">
        <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
             role="progressbar" class="progress-bar progress-bar-warning">
            <span class="sr-only">50%</span>
            <span class="progress-type">C++</span>
        </div>
    </div>
@endsection

@section('degree')
    <tr>
        <td>1ο Γυμνάσιο Ελευθερούπολης</td>
        <td>2009</td>
        <td> 16</td>
    </tr>
    <tr>
        <td>1ο ΕΠΑΛ Ελευθερούπολης</td>
        <td>2012</td>
        <td> 18</td>
    </tr>
    <tr>
        <td>Τει Κεντρικής Μακεδονίας</td>
        <td>2017</td>
        <td> 7</td>
    </tr>
@endsection