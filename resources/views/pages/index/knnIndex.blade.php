@extends('pages.index.index')
@section('form')
    <div class="row">
        <div class="col-md-4">
            <table class="table">
                <tbody>
                <tr>
                    <td>Dataset :</td>
                    <td>{{$dataset}}</td>
                </tr>
                <tr>
                    <td>Αλγόριθμος :</td>
                    <td>{{$algorithm}}</td>
                </tr>
                <tr>
                    <td>Training set :</td>
                    <td>{{$trainingSet}}</td>
                </tr>
                <tr>
                    <td>EvolutionIndex :</td>
                    <td>{{$evolutionIndex}}</td>
                </tr>

                </tbody>
            </table>
                <td><a href="{{route('index')}}" class="btn btn-primary" role="button">Πηγαίνετε πίσω για τα αλλάξετε τα δεδομένα</a> :</td>
          </div>
        <div class="col-md-8">
            {!! Form::open(['route'=>'storeknndata','method'=>'PUT' ])!!}
            <input type="hidden" name="dataset" value="{{ $dataset}}">
            <input type="hidden" name="algorithm" value="{{ $algorithm }}">
            <input type="hidden" name="trainingSet" value="{{ $trainingSet }}">
            <input type="hidden" name="evolutionIndex" value="{{ $evolutionIndex }}">
            <p>Έχετε επιλέξει τον αλγόριθμο KNN . Ο αλγόριθμος KNN απαιτεί την παράμετρο Κ.</p>
            <hr>
            <div class="form-group">
                {{ Form::label('k', 'Επιλέξτε την παράμετρο Κ:',array('class'=>'col-xs-4 control-label')) }}
                <div class="col-xs-2 selectContainer">
                    {{ Form::select('k',['k1' => 'k1', 'k2' => 'k2'],null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group">
                {{ Form::submit('Συνέχεια', array('class' => 'btn btn-success  col-xs-offset-2','style'=>'margin-top:50px')) }}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection