@extends('welcome')
@section('title','Qidiruv natijalari')
@section('content')
    <div class="container m-4 p-2">
        <h1 class="text text-center"><span class="text text-primary"></span> Bo'yicha qidiruv natijalari </h1>
        <a href="{{url('berilganlar')}}" class="btn btn-primary m-4 ">Berilgan kitoblar ichidan qidirish</a>
        <div class="m-2 p-3 ">

            <table class="table table-bordered">
                <tr>
                    <th>Kitob nomi</th>
                    <th>Yozuvchisi</th>
                    <th>Birnarsa</th>
                    <th>Holati [Berilgan]</th>
                </tr>
                <tr>
                    <td>Dasturlash asoslari</td>
                    <td> <span style="background-color: orange">Diyorbek</span> Boltayev</td>
                    <td>qandaydir ma'lumot</td>
                    <td>
                        <a href="{{url('kurish')}}" class="btn btn-primary">Ko'rish</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
