@extends('main')
@section('stylesheets')
    {!! Html::style('css/sweetalert.css') !!}
@endsection
@section('content')
    <!-------------------- Form -------------------------------------------------------------------->
         <div class="col-xs-8">
            <div class="form-horizontal">
                <form action="{{ route('setdata') }}" method="POST" id="form">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε DataSet:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="dataset">
                                <option selected disabled hidden>Επέλεξε Dataset..</option>
                                <option value="dataset1">dataset1</option>
                                <option value="dataset2">dataset2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε Αλγόριθμο:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="algorithm" onchange="showKnn(this)">
                                <option selected disabled hidden>Επέλεξε Αλγόριθμο..</option>
                                <option value="knn">knn</option>
                                <option value="bayes">bayes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="showKnn" style="display:none;">
                        <label class="col-xs-3 control-label">*Επιλέξτε την παράμετρο Κ:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="k">
                                <option selected disabled hidden>Επέλεξε την παραμετρο Κ..</option>
                                <option value="" hidden></option>
                                <option value="k1">k1</option>
                                <option value="k2">k2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε το training Set:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="trainingSet">
                                <option selected disabled hidden>Επέλεξε το training Set..</option>
                                <option value="tr1">tr1</option>
                                <option value="tr2">tr2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">*Επιλέξτε δείκτη απόδοσης:</label>
                        <div class="col-xs-4 selectContainer">
                            <select class="form-control" name="evolutionIndex">
                                <option selected disabled hidden>Επέλεξε τον δείκτη απόδοσης..</option>
                                <option value="accuracy">accuracy</option>
                                <option value="errorRate">errorRate</option>
                                <option value="sensitivity">sensitivity</option>
                                <option value="specificity">specificity</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success  col-xs-offset-5" style="margin-top:10px">Συνέχεια
                        </button>
                    </div>
                </form>
            </div>
        </div>
<<<<<<< HEAD
        @yield('dataset')
    </div>
    <script>
        function on_change(el) {
            if (el.options[el.selectedIndex].value == 'knn') {
                document.getElementById('showKnn').style.display = 'block'; // Show el
            } else {
                document.getElementById('showKnn').style.display = 'none'; // Hide el
            }
        }
    </script>

    <script>
        document.querySelector('#form').addEventListener('submit', function (e) {
            var form = this;
            e.preventDefault();
            swal({
                title: "Είστε σίγουροι?",
                showCancelButton: true,
                confirmButtonColor: '#449d44',
                cancelButtonColor: '#286090',
                confirmButtonText: 'Συνέχεια',
                cancelButtonText: "Επιστροφή",
                closeOnConfirm: false,
                closeOnCancel: true,
                allowEscapeKey: true
            }, function (isConfirm) {
                if (isConfirm) {
                    document.getElementById("form").submit();
                }
            })
        });
    </script>


=======
>>>>>>> d621ff1f9cec18d1141e3f62a7141634696e92a1
@endsection
@section('scripts')
    {!! Html::script('js/sweetalert.min.js') !!}
    {!! Html::script('js/indexDialogBox.js') !!}
    {!! Html::script('js/showKnn.js') !!}
@endsection



