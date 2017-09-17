@extends('layouts.app')
@section('title','Αρχική σελίδα')
@section('stylesheets')
    {!! Html::style('css/sweetalert.css') !!}
@endsection
@section('content')
    <div class="container">
        <!--------------------- Session Message -------------------------------------------------------->
        @if(Session::has('key'))
            <div class="alert alert-danger">{{Session::get('key')}}</div>

        @endif
        <!-------------------- Book -------------------------------------------------------------------->
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <a href="{{route('result.index')}}" class="btn btn-default"><span
                            class="glyphicon glyphicon-folder-open"></span> Δείτε τις προηγούμενες επεξεργασίες</a>
            </div>
        </div>
        <div class="row"><br></div>
        <hr>
        <!-------------------- Form -------------------------------------------------------------------->
        <div class="row">
            <div class="col-xs-8">
                <div class="form-horizontal">
                    <form action="{{ route('setdata') }}" method="POST" id="form">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">*Επιλέξτε πίνακα (Dataset):</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="dataset">
                                    <option selected disabled hidden>Επέλεξε πίνακα..</option>
                                    @foreach($dataset as $datasets)
                                        <option value="{{$datasets->id}}">{{$datasets->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">*Επιλέξτε από πια στήλη Εως πιά στήλη θέλετε για
                                έλενχο
                                (Test set):</label>
                            <div class="col-xs-1 ">
                                <p>Από</p>
                            </div>
                            <div class="col-xs-2 ">
                                <input type="number" title="Παρακαλώ ελέγξτε για τις τιμές που μπορείτε να εισάγετε απο τον πίνακα δίπλα"
                                       class="form-control" name="from"> </input  >
                            </div>
                            <div class="col-xs-1 ">
                                <p>εώς</p>
                            </div>
                            <div class="col-xs-2 ">
                                <input  type="number" title="Παρακαλώ ελέγξτε για τις τιμές που μπορείτε να εισάγετε απο τον πίνακα δίπλα"
                                       class="form-control" name="to"> </input>
                            </div>
                            <div class="container">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span></button>

                                    <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                               @include('pages.index.datasetTable')
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">*Επιλέξτε Αλγόριθμο (Algorithm):</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="algorithm" onchange="showKnn(this)">
                                    <option selected disabled hidden>Επέλεξε Αλγόριθμο..</option>
                                    @foreach($algorithm as $algorithms)
                                        <option value="{{$algorithms->id}}">{{$algorithms->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="showKnn" style="display:none;">
                            <label class="col-xs-4 control-label">*Επιλέξτε την παράμετρο Κ:</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="k">
                                    <option selected disabled hidden>Επέλεξε την παραμετρο Κ..</option>
                                    @foreach($k as $ks)
                                        <option value="{{$ks->id}}">{{$ks->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">*Επιλέξτε το ποσοστό δεδομένων για εκπαίδευση
                                (Training
                                Set):</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="trainingSet">
                                    <option selected disabled hidden>Επέλεξε το training Set..</option>
                                    @foreach($trainingset as $trainingsets)
                                        <option value="{{$trainingsets->id}}">{{$trainingsets->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success  col-xs-offset-5" style="margin-top:10px">
                                Συνέχεια
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------>
            <div class="col md-3">
                <div class="col-xs-4 ">
                    @include('pages.index.datasetTable')
                </div>
            </div>
            <div class="col-md-3"><br></div>
            <div class="col-md-6">
                <hr>
                <a href="{{route('dataset.index')}}" class="btn btn-default"><span
                            class="glyphicon glyphicon-arrow-right"></span> Διαβάστε περισσότερα για
                    τους διαθέσιμους πίνακες (Dataset)</a>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------>
    </div>
@endsection
@section('scripts')
    {{--{!! Html::script('js/sweetalert.min.js') !!}--}}
    {{--{!! Html::script('js/indexDialogBox.js') !!}--}}
    {!! Html::script('js/showKnn.js') !!}
@endsection