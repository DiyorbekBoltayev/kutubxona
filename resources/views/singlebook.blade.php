@extends('master')
@section('content')
    <h1 class="text text-success">Kitob haqida ma'lumot</h1>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Local_id </th>
                <td>{{$book->local_id}}</td>
            </tr>
            <tr>
                <th> Kitob sarlavhasi </th>
                <td>{{$book->sarlavha->sarlavha}}</td>
            </tr>
            <tr>
                <th>Kitob muallifi</th>
                <td>{{$book->muallif->muallif}}</td>
            </tr>
            <tr>
                <th>Kitob turi</th>
                <td>{{$book->turi->kitob_turi}}</td>
            </tr>
            <tr>
                <th>Yili</th>
                <td>{{$book->yili}}</td>
            </tr>
            <tr>
                <th>Joylashgan javon</th>
                <td>{{$book->javon->javon}}</td>
            </tr>
            <tr>
                <th>Nashriyot</th>
                <td>{{$book->nashriyot->nashriyot}}</td>
            </tr>
            <tr>
                <th>Izoh</th>
                <td>{{$book->izoh}}</td>
            </tr>
            <tr>
                <th>Holati</th>
                <td>@if($book->holati==1)
                        Kutubxonada
                    @else
                        O'qilmoqda
                    @endif
                </td>
            </tr>




        </table>


    </div>
@endsection
