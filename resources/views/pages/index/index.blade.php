@extends('main')
@section('stylesheets')
    {!! Html::style('css/sweetalert.css') !!}
@endsection
@section('content')
    <!-------------------- Form -------------------------------------------------------------------->
         <div class="col-xs-8">
            <div class="form-horizontal">
                <form action="{{ route('setdata') }}" method="POST" id="form">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε DataSet:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="dataset">
                                <option selected disabled hidden>Επέλεξε Dataset..</option>
                                @foreach($dataset as $datasets)
                                    <option value="{{$datasets->id}}">{{$datasets->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε Αλγόριθμο:</label>
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
                        <label class="col-xs-3 control-label">*Επιλέξτε την παράμετρο Κ:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="k">
                                <option selected disabled hidden>Επέλεξε την παραμετρο Κ..</option>
                                <option value="0" hidden></option>
                                @foreach($k as $ks)
                                    <option value="{{$ks->id}}">{{$ks->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε το training Set:</label>
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
                        <label class="col-xs-3 control-label">*Επιλέξτε δείκτη απόδοσης:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="evolutionIndex">
                                <option selected disabled hidden>Επέλεξε τον δείκτη απόδοσης..</option>
                                @foreach($evolutionindex as $evolutionindexes)
                                    <option value="{{$evolutionindexes->id}}">{{$evolutionindexes->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success  col-xs-offset-5" style="margin-top:10px">Συνέχεια
                        </button>
                    </div>
                </form>
            </div>
        </div>
@endsection

@section('scripts')
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/indexDialogBox.js') !!}
    {!! Html::script('js/showKnn.js') !!}
@endsection



