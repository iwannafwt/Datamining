@extends('main')
@section('content')
    <p>Το dataset που είχεις επιλέξει είναι : {{$dataset}}</p>
    <p>Ο αλγόρυθμος ταξινόμησεις είναι : {{$algorithm}}</p>
    <p>Τα δεδομένα που περιέχει το dataset είναι :</p>

        <table class="table table-bordered">
            <thead>
            </thead>
            <tbody>
            @foreach($data as $datas)
                <tr>
                    @for($i=1;$i<=26;$i++)
                    {{--is algorithm is dataset 2--}}
                     {{--emfanizei mono tis prwtes 26 grammes tou pinaka--}}
                    <td>{{$a=('f'.$i)}}</td>
                    <td>{{$datas->$a}}</td>
                    @endfor
                    {{--<td>{{$datas->f2}}</td>--}}
                    {{--<td>{{$datas->f3}}</td>--}}
                    {{--<td>{{$datas->f4}}</td>--}}
                    {{--<td>{{$datas->f5}}</td>--}}
                    {{--<td>{{$datas->f6}}</td>--}}
                    {{--<td>{{$datas->f7}}</td>--}}
                    {{--<td>{{$datas->f8}}</td>--}}
                    {{--<td>{{$datas->f9}}</td>--}}
                    {{--<td>{{$datas->f10}}</td>--}}
                    {{--<td>{{$datas->f11}}</td>--}}
                    {{--<td>{{$datas->f12}}</td>--}}
                    {{--<td>{{$datas->f13}}</td>--}}
                    {{--<td>{{$datas->f14}}</td>--}}
                    {{--<td>{{$datas->f15}}</td>--}}
                    {{--<td>{{$datas->f16}}</td>--}}
                    {{--<td>{{$datas->f17}}</td>--}}
                    {{--<td>{{$datas->f18}}</td>--}}
                    {{--<td>{{$datas->f19}}</td>--}}
                    {{--<td>{{$datas->f20}}</td>--}}
                    {{--<td>{{$datas->f21}}</td>--}}
                    {{--<td>{{$datas->f22}}</td>--}}
                    {{--<td>{{$datas->f23}}</td>--}}
                    {{--<td>{{$datas->f24}}</td>--}}
                    {{--<td>{{$datas->f25}}</td>--}}
                    {{--<td>{{$datas->f26}}</td>--}}

                </tr>
            @endforeach
            </tbody>
        </table>
@endsection