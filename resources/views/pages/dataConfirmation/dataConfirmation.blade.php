@extends('main')
    <div class="row">
        <div class="col-md-4">
            <table class="table">
                <tbody>
                <tr>
                    <td>Dataset :</td>
                    <td>{{$dataset}}</td>
                </tr>
                <tr>
                    <td>Αλγόρυθμος :</td>
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
@endsection