@extends('main')
@section('content')
    <br><br>
    <div class="container">
        <div class="resume">
            <header class="page-header">
                @yield('name')
            </header>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading resume-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-xs-12 col-sm-4">
                                        <figure>
                                            @yield('foto')
                                        </figure>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <ul class="list-group">
                                            @yield('about')
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bs-callout bs-callout-danger">
                            <h4>Περίληψη</h4>
                            @yield('summary')
                        </div>
                        <div class="bs-callout bs-callout-danger">
                            <h4>Ενδιαφέροντα</h4>
                            @yield('interests')
                        </div>

                        <div class="bs-callout bs-callout-danger">
                            {{--poroume na baloume diafora--}}
                        </div>
                        <div class="bs-callout bs-callout-danger">
                            <h4>Γλώσσα και Δεξιότητες</h4>
                            <ul class="list-group">

                                @yield('skills')
                            </ul>
                        </div>
                        <div class="bs-callout bs-callout-danger">
                            <h4>Εκπαίδευση</h4>
                            <table class="table table-striped table-responsive ">
                                <thead>
                                <tr>
                                    <th>Εκπαιδευτικό ίδρυμα</th>
                                    <th>Χρονιά αποφοίτησης</th>
                                    <th>Βαθμός</th>
                                </tr>
                                </thead>
                                <tbody>
                                @yield('degree')
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection