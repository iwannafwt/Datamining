@extends('pages.index.index')
@section('form')
<form action="{{ action('DataForProcessingController@setData') }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="col-xs-3 control-label">Επιλέξτε DataSet:</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="dataset">
                <option selected="selected" hidden>Επέλεξε Dataset..</option>
                <option value="dataset1">dataset1</option>
                <option value="dataset2">dataset2</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Επιλέξτε Αλγόριθμο:</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="algorithm" id="mySelect" onchange='on_change(this)'>
                <option selected="selected" hidden>Επέλεξε Αλγόριθμο..</option>
                <option value="knn">knn</option>
                <option value="bayes">bayes</option>
            </select>
        </div>
    </div>
    <div class="form-group" id="showKnn" style="display:none;">
        <label class="col-xs-3 control-label"> Επιλέξτε την παράμετρο Κ:</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="k">
                <option selected="selected" hidden>Επέλεξε την παραμετρο Κ..</option>
                <option value="k1">k1</option>
                <option value="k2">k2</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Επιλέξτε το training Set:</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="trainingSet">
                <option selected="selected" hidden>Επέλεξε το training Set..</option>
                <option value="tr1">tr1</option>
                <option value="tr2">tr2</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label"> Επιλέξτε δείκτη απόδοσης:</label>
        <div class="col-xs-3 selectContainer">
            <select  class="form-control" name="evolutionIndex">
                <option selected="selected" hidden>Επέλεξε τον δείκτη απόδοσης..</option>
                <option value="accuracy">accuracy</option>
                <option value="errorRate">errorRate</option>
                <option value="sensitivity">sensitivity</option>
                <option value="specificity">specificity</option>
            </select>
        </div>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success  col-xs-offset-5" style="margin-top:10px">Submit</button>
    </div>
</form>

<script>
    function on_change(el){
        if(el.options[el.selectedIndex].value == 'knn'){
            document.getElementById('showKnn').style.display = 'block'; // Show el
        }else{
            document.getElementById('showKnn').style.display = 'none'; // Hide el
        }
    }
</script>


@endsection