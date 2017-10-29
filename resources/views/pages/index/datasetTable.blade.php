<table class="table table-bordered">
@foreach($dataset as $datasets)
        <tbody>
        <tr>
            <td width="50%">{{$datasets->value}}</td>
            <td width="25%">{{$datasets->columnsStart}}</td>
            <td width="25%">{{$datasets->columnsEnd}}</td>
        </tr>
        </tbody>
@endforeach
</table>