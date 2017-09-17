<h6>Επιλογές που μπορείτε να κάνετε σχετικά με τον αριθμό στηλών του πίνακα</h6>
@foreach($dataset as $datasets)
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td width="50%">{{$datasets->value}}</td>
            <td width="25%">{{$datasets->columnsStart}}</td>
            <td width="25%">{{$datasets->columnsEnd}}</td>
        </tr>
        </tbody>
    </table>
@endforeach