@extends('main')
@section('content')
    <div class="row">

        <div class="jumbotron">
            <p>Graduation Project </p>
        </div>
            <div class="col-md-10">
                <div class="form-horizontal">
                    {!! Form::open()!!}
                        <div class="form-group">
                            {{ Form::label('dataset', 'Choose a DataSet:',array('class'=>'col-xs-3 control-label')) }}
                            <div class="col-xs-2 selectContainer">
                                {{ Form::select('dataset',['dataset1' => 'dataset1', 'dataset2' => 'dataset2'],null,array('class'=>'form-control'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('algorithm', 'Choose an Algorithm:',array('class'=>'col-xs-3 control-label')) }}
                            <div class="col-xs-2 selectContainer">
                            {{ Form::select('algorithm',['knn' => 'Knn', 'decisionTrees' => 'decision trees'],null,array('class'=>'form-control'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Run', array('class' => 'btn btn-success  col-xs-offset-4','style'=>'margin-top:20px')) }}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>





        <div class="col">
            <div class="col-lg-4 col-sm-6 text-center">
                <div class="well">
                    <h4>KNN</h4>
                    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                        <li class="ui-state-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-lg-4 col-sm-6 text-center">
                <div class="well">
                    <h4>Decision Trees</h4>
                    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                        <li class="ui-state-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-lg-4 col-sm-6 text-center">
                <div class="well">
                    <h4>BAYES</h4>
                    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                        <li class="ui-state-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                </div>
            </div>
        </div>
    </div>
@endsection