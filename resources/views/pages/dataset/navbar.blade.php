<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header"></div>
        <ul class="nav navbar-nav">
            @foreach($datasetall as $datasets)
                <li><a href="{{route('dataset.show' , $datasets->id)}}">{{$datasets->name}}</a></li>
            @endforeach
        </ul>
        <div class="col-md-8"></div>
        {!! Form::open(['route'=>['dataset.index'] , 'method'=>'GET']) !!}
        {!! Form::submit('Επιστροφή πίσω' , ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</nav>