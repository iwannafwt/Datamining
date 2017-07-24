@extends('pages.index.index')
@section('dataset')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('dataset.index')}}" method="get">
                            <button type="submit" id="button">Διαθέσιμα datasets</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection