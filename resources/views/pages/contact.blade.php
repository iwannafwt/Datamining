@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <!-- contact Form -->
                    <h2 id="ContactFontSize">Επικοινωνήστε μαζί μας</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="exampleInputName2">Όνομα:</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                           placeholder="Το όνoμα σας.">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                           placeholder="Το email σας.">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputText">Μήνυμα:</label>
                                    <textarea class="form-control" style="overflow:auto;  resize: none; "
                                              placeholder="Αφήστε μας το μήνυμα σας..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Αποστολή</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            <!-- Add Google Maps -->
            <div id="googleMap" style="height:400px;width:100%;"></div>
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(41.074798, 23.553702);
                    var mapProp = {
                        center: myCenter,
                        zoom: 14,
                        scrollwheel: false,
                        draggable: false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    var marker = new google.maps.Marker({position: myCenter});
                    marker.setMap(map);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0ytnOS1jsLVniRSMiCZN3QyfOqBBcHJs&callback=myMap"></script>

        </div>
    </div>
</div>

    <style>
        a {
            color: #26a5d3;
        }

        a:hover, a:focus {
            text-decoration: none;
            color: #26a5d3;
        }

        .ContactFontSize {
            margin: 0 0 25px 0;
            font-family: 'Patua One', cursive;
            fonr-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #contact {
            background: #333333;
            color: #f4f4f4;
            padding-bottom: 80px;
        }

        textarea.form-control {
            height: 100px;
        }
    </style>
@endsection