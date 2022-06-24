@extends('master')
@section('content')
    <h1 class=" mt-3 text text-primary text-center">
        Barcha kitoblar ro'yhati
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
                <th>Local_id</th>
                <th>Kitob Sarlavhasi</th>
                <th>Kitob Muallifi</th>
                <th>Nashr qilingan yili</th>
                <th>Amal</th>

            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->local_id}}</td>
                <td>{{$book->sarlavha->sarlavha}}</td>
                <td>{{$book->muallif->muallif}}</td>
                <td>{{$book->yili}}</td>
                <td><a href="{{route('singlebook',$book->id)}}" class="btn btn-outline-primary " >Ko'rish</a>
                <a href="{{route('editbook',$book->id)}}" class="btn btn-outline-warning text-dark " >Tahrirlash</a>
                <a href="{{route('deletebook',$book->id)}}" class="btn btn-outline-danger " >O'chirish</a></td>
            </tr>
            @endforeach



        </table>

    </div>
@endsection
