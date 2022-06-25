@extends('master')
@section('content')
    <h1 class=" mt-3 text text-primary text-center">
        Barcha guruhlar ro'yhati
    </h1>
    @if (session()->has('message'))
        <div id="mes1" class="alert alert-dismissable alert-success" >

            <strong>
                {!! session()->get('message') !!}
            </strong>
        </div>
    @endif

    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Guruh nomi</th>
                <th>Amal</th>

            </tr>
            @foreach($guruh as $g)
                @if($g->delete==1) @continue @endif
                <tr>
                    <td>{{$g->id}}</td>

                    <td>{{$g->guruh}}</td>
                    <td>
                        <a href="{{route('gr_single',$g->id)}}" class="btn btn-outline-primary">Guruh talabalarini ko'rish</a>
                        <a href="{{route('edit_gr',$g->id)}}" class="btn btn-outline-warning text-dark " >Tahrirlash</a>
                        <a href="{{route('delete_gr',$g->id)}}" class="btn btn-outline-danger " >O'chirish</a></td>
                </tr>
            @endforeach



        </table>

    </div>
@endsection
