@extends('master')
@section('content')
    <h1 class="text text-primary text-center">Statistika</h1>
    <div class="container m-3 d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center p-1  "  >
        <input type="date" class="form-control input-group" style="width: 200px; height: 40px;border:1px solid #07294d " >
            <p class="m-3 text text-dark"> Sanadagi foydalanish tarixi</p>
        </div>
        <button class="btn btn-primary">Pdf shaklda chop etish</button>
        <button class="btn btn-success">Boshqa statistik amallarni ko'rsatish</button>

    </div>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Foydalanuvchi</th>
                <th>Guruh</th>
                <th>Kitob Sarlavhasi</th>
                <th>Kitob Muallifi</th>
                <th>Harakat</th>
                <th>Amal</th>

            </tr>
            <tr>
                <td>Otajonov Alisher Muxtor o'g'li</td>
                <td>942-20</td>
                <td>Xamsa</td>
                <td>Alisher Navoiy</td>
                <td class="text text-primary">Kitob olingan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Ruzimov Jasurbek Oybek o'g'li</td>
                <td>942-20</td>
                <td>Xamsa</td>
                <td>Alisher Navoiy</td>
                <td class="text text-success">Kitob qaytarilgan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Boltayev Diyorbek Tajimurat o'g'li</td>
                <td>942-20</td>
                <td>Xamsa</td>
                <td>Alisher Navoiy</td>
                <td class="text text-success">Kitob qaytarilgan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Xo'janiyozov Fayzulla Maqsud o'g'li</td>
                <td>942-20</td>
                <td>Xamsa</td>
                <td>Alisher Navoiy</td>
                <td class="text text-primary">Kitob olingan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Otajonov Alisher Muxtor o'g'li</td>
                <td>942-20</td>
                <td>Ilm olish sirlari</td>
                <td>Imom Zarnujiy</td>
                <td class="text text-primary">KItob olingan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Otajonov Alisher Muxtor o'g'li</td>
                <td>942-20</td>
                <td>Dasturlash asoslari Java</td>
                <td>Adham Muzaffarov</td>
                <td class="text text-primary">Kitob olingan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>
            <tr>
                <td>Otajonov Alisher Muxtor o'g'li</td>
                <td>942-20</td>
                <td>Dasturlash asoslari Java</td>
                <td>Adham Muzaffarov</td>
                <td class="text text-success">KItob qaytarilgan</td>
                <td><a href="{{route('showborrower')}}" class="btn btn-outline-primary " >Ko'rish</a></td>
            </tr>



        </table>
    </div>
@endsection
