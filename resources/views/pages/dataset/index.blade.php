@extends('pages.index.index')
@section('dataset')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form>
                            @foreach($dataset as $datasets)
                                <input type="checkbox" name="iris" value="Iris">{{$datasets->name}}
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{--{{dd($dataset)}}--}}