@extends('layouts.app')
@section('content')
    <div class="box">
        <div class="info">
            <h4 class="text-center">Οι επιλογές που έχετε κάνει</h4>
            <table class="table">
                <tbody>
                <tr>
                    <td>Dataset :</td>
                    <td>{{$dataset->name}}</td>
                </tr>
                <tr>
                    <td>Αλγόρυθμος :</td>
                    <td>{{$algorithm->name}}</td>
                </tr>
                <tr>

                    <td>K :</td>
                    @if($k == null)
                      <td><h6>Ο αλγόριθμος δεν είναι ο ΚΝΝ . Δεν χρειάζετε να ορίσετε τη μεταβλητή κ.</h6></td>
                    @else
                        <td>{{$k->name}}</td>
                    @endif
                </tr>
                <tr>
                    <td>Training set :</td>
                    <td>{{$trainingSet->name}}</td>
                </tr>
                <tr>
                    <td>EvolutionIndex :</td>
                    <td>{{$evolutionIndex->name}}</td>
                </tr>
                <tr>
                    <td>
                        {!! Form::open(['route'=>['index'] , 'method'=>'PUT']) !!}
                        {!! Form::submit('Επιστροφή πίσω' , ['class' => 'btn btn-primary btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route'=>['enableMatlab'] , 'method'=>'PUT']) !!}
                        {{ Form::hidden('dataset', $dataset->id) }}
                        {{ Form::hidden('algorithm', $algorithm->id) }}
                        {{--{{ Form::hidden('k', $k->id) }}--}}
                        {{ Form::hidden('trainingset', $trainingSet->id) }}
                        {{ Form::hidden('evolutionindex', $evolutionIndex->id) }}
                        {!! Form::submit('Επεξεργασία αποτελεσμάτων' , ['class' => 'btn btn-success btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .box {
            border-radius: 3px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            padding: 10px 25px;
            text-align: right;
            display: block;
            margin-top: 60px;
        }
        .box-icon span {
            color: #fff;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .info h4 {
            font-size: 26px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .info > p {
            color: #717171;
            font-size: 16px;
            padding-top: 10px;
            text-align: justify;
        }

        .info > a {
            background-color: #03a9f4;
            border-radius: 2px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            color: #fff;
            transition: all 0.5s ease 0s;
        }

        .info > a:hover {
            background-color: #0288d1;
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
            color: #fff;
            transition: all 0.5s ease 0s;
        }
    </style>

@endsection