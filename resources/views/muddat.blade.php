@extends('master')
@section('content')
    <h1 class=" text text-primary text-center">
       Qaytarish muddati o'tgan kitoblar
    </h1>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Foydalanuvchi</th>
                <th>Guruh</th>
                <th>Telefon raqami</th>
                <th>Kitob Sarlavhasi</th>
                <th>Kitob Muallifi</th>
                <th >Qaytarish vaqti</th>


            </tr>
            @forelse($kitoblar as $kitob)
            <tr>
                <td>{{$kitob->holatim->ism}} {{$kitob->holatim->familya}} {{$kitob->holatim->otasining_ismi}}</td>
                <td>{{$kitob->holatim->guruh->guruh}}</td>
                <td>{{$kitob->holatim->telefon}}</td>
                <td>{{$kitob->sarlavha->sarlavha}}</td>
                <td>{{$kitob->muallif->muallif}}</td>
                <td class="text text-danger">{{$kitob->berish}}</td>

            </tr>
            @empty
                    <tr>
                        <td>
                            <h1 class="text text-success"> Muddati o'tgan kitoblar yo'q</h1>
                        </td>
                    </tr>
                    @endforelse



        </table>

    </div>
@endsection
