@extends('main')
@section('content')

    <!-------------------- Logo ------------------------------------------------------------------->
    <div class="jumbotron">
        <img class="img-circle img-responsive" src="{{URL::asset('/Logo/Logo.png')}}" alt=""
             style=" display: block;margin: auto;width: 40%;">
    </div>
    <!-------------------- Form -------------------------------------------------------------------->
    <div class="form-horizontal">
        {!! Form::open(['route'=>'setdata','method'=>'PUT'])!!}
        <div class="form-group">
            {{ Form::label('dataset', 'Επιλέξτε DataSet:',array('class'=>'col-xs-3 control-label')) }}
            <div class="col-xs-2 selectContainer">
                {{ Form::select('dataset',['dataset1' => 'dataset1', 'dataset2' => 'dataset2'],null,array('class'=>'form-control'))}}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('algorithm', 'Επιλέξτε αλγόριθμο:',array('class'=>'col-xs-3 control-label')) }}
            <div class="col-xs-2 selectContainer">
                {{ Form::select('algorithm',['knn' => 'Knn', 'bayes' => 'Bayes' ,'decisionTrees' => 'Decision trees'],null,array('class'=>'form-control'))}}
            </div>
        </div>
        {{--<div class="form-group">--}}
        {{--{{ Form::label('trainingSet', 'Επιλέξτε το training Set:',array('class'=>'col-xs-3 control-label')) }}--}}
        {{--<div class="col-xs-2 selectContainer">--}}
        {{--{{ Form::select('algorithm',['knn' => 'Knn', 'Bayes' ,'decisionTrees' => 'decision trees'],null,array('class'=>'form-control'))}}--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            {{ Form::label('evolutionIndex', 'Επιλέξτε δείκτη απόδοσης:',array('class'=>'col-xs-3 control-label')) }}
            <div class="col-xs-2 selectContainer">
                {{ Form::select('evolutionIndex',['accuracy' => 'Αccuracy', 'errorRate' => 'Error Rate' , 'sensitivity' => 'Sensitivity','specificity' => 'Specificity'],null,array('class'=>'form-control'))}}
            </div>
        </div>
        <div class="form-group">
            {{ Form::submit('Run', array('class' => 'btn btn-success  col-xs-offset-4','style'=>'margin-top:20px')) }}
        </div>
        {!! Form::close() !!}
    </div>

    @yield('knnForm')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Εξόρυξη γνώσης/Data mining</h2>
                <div class="row">
                    <?php
                    $myfile = fopen("algorithm/Datamining.html", "r") or die("Unable to open file!");
                    echo fread($myfile, filesize("algorithm/Datamining.html"));
                    fclose($myfile);
                    ?>
                    <a href="{{route('theory')}}" class="btn btn-info" role="button">Διαβάστε περισσότερα</a>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="{{URL::asset('/algorithmPhotos/Bayes.png')}}"
                                 alt="" style=" border-radius: 150%; margin: 6px 0;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bayes</h4>
                                <h4 class="subheading">Θεώρημα Bayes</h4>
                                <a href="{{route('bayes')}}" class="btn btn-info" role="button">Διαβάστε περισσότερα</a>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    <embed src="algorithm/bayes.html" width="100%" height="200"></embed>
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="{{URL::asset('/algorithmPhotos/KNN.png')}}"
                                 alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Knn</h4>
                                <h4 class="subheading">Αλγόριθμος Κ πλησιέστερων Γειτώνων.</h4>
                                <a href="{{route('knn')}}" class="btn btn-info" role="button">Διαβάστε περισσότερα</a>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    <embed src="algorithm/knn.html" width="150%" height="200"></embed>
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive"
                                 src="{{URL::asset('/algorithmPhotos/DECISIONTREES.png')}}" alt=""
                                 style="margin: 20px 0;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Decision Trees</h4>
                                <h4 class="subheading">Δένδρα απόφασης</h4>
                                <a href="{{route('decisionTrees')}}" class="btn btn-info" role="button">Διαβάστε
                                    περισσότερα</a>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    <embed src="algorithm/decisionTrees.html" width="100%" height="200"></embed>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <style>
        .timeline {
            position: relative;
            padding: 4px 0 0 0;
            margin-top: 22px;
            list-style: none;
        }

        .timeline > li:nth-child(even) {
            position: relative;
            margin-bottom: 50px;
            height: 180px;
            right: -100px;
        }

        .timeline > li:nth-child(odd) {
            position: relative;
            margin-bottom: 50px;
            height: 180px;
            left: -100px;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
            min-height: 170px;
        }

        .timeline > li .timeline-panel {
            position: relative;
            float: left;
            width: 41%;
            padding: 0 20px 20px 30px;
            text-align: right;
        }

        .timeline > li .timeline-panel:before {
            right: auto;
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline > li .timeline-panel:after {
            right: auto;
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline > li .timeline-image {
            z-index: 100;
            position: absolute;
            left: 50%;
            border: 7px solid #3b5998;
            border-radius: 100%;
            background-color: #3b5998;
            box-shadow: 0 0 5px #4582ec;
            width: 200px;
            height: 200px;
            margin-left: -100px;
        }

        .timeline > li .timeline-image h4 {
            margin-top: 12px;
            font-size: 10px;
            line-height: 14px;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
            padding: 0 30px 20px 20px;
            text-align: left;
        }

        .timeline > li.timeline-inverted > .timeline-panel:before {
            right: auto;
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline > li.timeline-inverted > .timeline-panel:after {
            right: auto;
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline > li:last-child {
            margin-bottom: 0;
        }

        .timeline .timeline-heading h4 {
            margin-top: 22px;
            margin-bottom: 4px;
            padding: 0;
            color: #b3b3b3;
        }

        .timeline .timeline-heading h4.subheading {
            margin: 0;
            padding: 0;
            text-transform: none;
            font-size: 18px;
            color: #333333;
        }

        .timeline .timeline-body > p,
        .timeline .timeline-body > ul {
            margin-bottom: 0;
            color: #808080;
        }

        /*Style for even div.line*/
        .timeline > li:nth-child(odd) .line:before {
            content: "";
            position: absolute;
            top: 60px;
            bottom: 0;
            left: 690px;
            width: 4px;
            height: 340px;
            background-color: #3b5998;
            -ms-transform: rotate(-44deg); /* IE 9 */
            -webkit-transform: rotate(-44deg); /* Safari */
            transform: rotate(-44deg);
            box-shadow: 0 0 5px #4582ec;
        }

        /*Style for odd div.line*/
        .timeline > li:nth-child(even) .line:before {
            content: "";
            position: absolute;
            top: 60px;
            bottom: 0;
            left: 450px;
            width: 4px;
            height: 340px;
            background-color: #3b5998;
            -ms-transform: rotate(44deg); /* IE 9 */
            -webkit-transform: rotate(44deg); /* Safari */
            transform: rotate(44deg);
            box-shadow: 0 0 5px #4582ec;
        }

        /* Medium Devices, .visible-md-* */
        @media (min-width: 992px) and (max-width: 1199px) {
            .timeline > li:nth-child(even) {
                margin-bottom: 0px;
                min-height: 0px;
                right: 0px;
            }

            .timeline > li:nth-child(odd) {
                margin-bottom: 0px;
                min-height: 0px;
                left: 0px;
            }

            .timeline > li:nth-child(even) .timeline-image {
                left: 0;
                margin-left: 0px;
            }

            .timeline > li:nth-child(odd) .timeline-image {
                left: 690px;
                margin-left: 0px;
            }

            .timeline > li:nth-child(even) .timeline-panel {
                width: 76%;
                padding: 0 0 20px 0px;
                text-align: left;
            }

            .timeline > li:nth-child(odd) .timeline-panel {
                width: 70%;
                padding: 0 0 20px 0px;
                text-align: right;
            }

            .timeline > li .line {
                display: none;
            }
        }

        /* Small Devices, Tablets */
        @media (min-width: 768px) and (max-width: 991px) {
            .timeline > li:nth-child(even) {
                margin-bottom: 0px;
                min-height: 0px;
                right: 0px;
            }

            .timeline > li:nth-child(odd) {
                margin-bottom: 0px;
                min-height: 0px;
                left: 0px;
            }

            .timeline > li:nth-child(even) .timeline-image {
                left: 0;
                margin-left: 0px;
            }

            .timeline > li:nth-child(odd) .timeline-image {
                left: 520px;
                margin-left: 0px;
            }

            .timeline > li:nth-child(even) .timeline-panel {
                width: 70%;
                padding: 0 0 20px 0px;
                text-align: left;
            }

            .timeline > li:nth-child(odd) .timeline-panel {
                width: 70%;
                padding: 0 0 20px 0px;
                text-align: right;
            }

            .timeline > li .line {
                display: none;
            }
        }

        /* Custom, iPhone Retina */
        @media only screen and (max-width: 767px) {
            .timeline > li:nth-child(even) {
                margin-bottom: 0px;
                min-height: 0px;
                right: 0px;
            }

            .timeline > li:nth-child(odd) {
                margin-bottom: 0px;
                min-height: 0px;
                left: 0px;
            }

            .timeline > li .timeline-image {
                position: static;
                width: 150px;
                height: 150px;
                margin-bottom: 0px;
            }

            .timeline > li:nth-child(even) .timeline-image {
                left: 0;
                margin-left: 0;
            }

            .timeline > li:nth-child(odd) .timeline-image {
                float: right;
                left: 0px;
                margin-left: 0;
            }

            .timeline > li:nth-child(even) .timeline-panel {
                width: 100%;
                padding: 0 0 20px 14px;
            }

            .timeline > li:nth-child(odd) .timeline-panel {
                width: 100%;
                padding: 0 14px 20px 0px;
            }

            .timeline > li .line {
                display: none;
            }
        }
    </style>


@endsection