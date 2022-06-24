@extends('master')
@section('content')
    <h1 class="text text-primary text-center">Foydalanuvchilar</h1>
    <div class="container m-3 d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center p-1  "  >
            <input type="text" class="form-control input-group" value="942-20" style="width: 100px; height: 40px;border:1px solid #07294d " >

            <p class="m-3 text text-dark">Guruhdagi foydalanuvchilar</p>
        </div>
        <button class="btn btn-primary">Pdf shaklda chop etish</button>
        <button class="btn btn-success">Boshqa amallarni ko'rsatish</button>

    </div>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Familya Ism Sharif</th>
                <th>Guruh</th>
                <th>Telefon raqami</th>
                <th>Viloyat</th>
                <th>Tuman</th>
                <th>Jinsi</th>
                <th>Amal</th>

            </tr>
            <tr>
                <td>Otajonov Alisher Muxtor o'g'li</td>
                <td>942-20</td>
                <td>+998996761936</td>
                <td>Xorazm</td>
                <td >Yangiariq</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Ruzimov Jasurbek Oybek o'g'li</td>
                <td>942-20</td>
                <td>+998973432105</td>
                <td>Xorazm</td>
                <td>Hazorasp</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Boltayev Diyorbek Tajimurat o'g'li</td>
                <td>942-20</td>
                <td>+998883621700</td>
                <td>Xorazm</td>
                <td >Urganch</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Xo'janiyozov Fayzulla Maqsud o'g'li</td>
                <td>942-20</td>
                <td>+998888578387</td>
                <td>Xorazm</td>
                <td >Urganch shaxar</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Abdurahmonov Beksulton Bahodir o'gli </td>
                <td>942-20</td>
                <td>+998900900971</td>
                <td>Surxondaryo</td>
                <td >Qiziqriq</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Boltayev Abror Odilbek o'gli</td>
                <td>942-20</td>
                <td>+998930900927</td>
                <td>Xorazm</td>
                <td >Shovot</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>
            <tr>
                <td>Po'latov Asadbek Dilmurod o'gli</td>
                <td>942-20</td>
                <td>+998919846045</td>
                <td>Xorazm</td>
                <td >Tuproqqal'a</td> <td>Erkak</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Tarix</a></td>
            </tr>



        </table>
    </div>
@endsection
