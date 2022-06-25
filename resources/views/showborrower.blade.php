@extends('master')
@section('content')
    <h1 class="text text-success">Berilgan kitob haqida ma'lumot</h1>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Foydalanuvchi </th>
                <td>{{$data->holatim->ism}} {{$data->holatim->familya}} {{$data->holatim->otasining_ismi}}</td>
            </tr>
            <tr>
                <th>Foydalanuvchi guruhi</th>
                <td>{{$data->holatim->guruh->guruh}}</td>
            </tr>
            <tr>
                <th>Telefon raqami</th>
                <td>{{$data->holatim->telefon}}</td>
            </tr>
            <tr>
                <th>Sarlavha</th>
                <td>{{$data->sarlavha->sarlavha}}</td>
            </tr>
            <tr>
                <th>Muallif</th>
                <td>{{$data->muallif->muallif}}</td>
            </tr>
            <tr>
                <th>Kitobni olgan vaqti</th>
                <td>{{$data->olgan}}</td>
            </tr>
            <tr>
                <th>Kitobni qaytarish vaqti</th>
                <td>{{$data->berish}}</td>
            </tr>
            <tr>

                <td>
                <a href="{{route('qaytdi',$data->id)}}" class="btn btn-outline-danger"> Kitob qaytarildi</a>
                </td>
            </tr>




        </table>


    </div>
@endsection
