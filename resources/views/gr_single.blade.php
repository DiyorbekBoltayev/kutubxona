@extends('master')
@section('content')
    <h1 class=" text text-primary text-center">
        Talabalar ro'yhati
    </h1>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Otasining ismi</th>
                <th>Telefon raqami</th>


            </tr>
            @forelse($data as $k=>$d)
                <tr>
                    <td>{{$k+1}}</td>
                    <td>{{$d->ism}}</td>
                    <td>{{$d->familya}}</td>
                    <td>{{$d->otasining_ismi}}</td>
                    <td>{{$d->telefon}}</td>


                </tr>
            @empty
                <tr>
                    <td>
                        <h1 class="text text-success"> Hozricha talabalar yo'q</h1>
                    </td>
                </tr>
            @endforelse



        </table>

    </div>
@endsection
