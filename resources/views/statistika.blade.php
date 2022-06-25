@extends('master')
@section('content')
    <h1 class="text text-primary text-center">Statistika</h1>
    <div class="container m-3 d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center p-1  "  >
            <form action="{{route('sarala')}}" method="post" class="d-flex align-items-center">
                @csrf
        <input type="date" name="sana" @if(isset($sana)) value="{{$sana}}"  @endif class="form-control input-group" style="width: 200px; height: 40px;border:1px solid #07294d " >
            <p class="m-3 text text-dark"> Sanadagi foydalanish tarixi</p>
                <button type="submit" class="btn btn-outline-primary">Ko'rish</button>
            </form>
        </div>
        <button onclick="window.print()" class="btn btn-primary">Pdf shaklda chop etish</button>


    </div>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Foydalanuvchi</th>
                <th>Guruh</th>
                <th>Kitob Sarlavhasi</th>
                <th>Kitob Muallifi</th>
                <th>Harakat</th>
                <th>Sana</th>

            </tr>
            @forelse($data as $d)
            <tr>
                <td>{{$d->st->ism}} {{$d->st->familya}}  {{$d->st->otasining_ismi}} </td>
                <td>{{$d->st->guruh->guruh}}</td>
                <td>{{$d->ktb->sarlavha->sarlavha}}</td>
                <td>{{$d->ktb->muallif->muallif}}</td>
                @if($d->holat==0)
                <td class="text text-primary">Kitob olingan</td>
                @else
                    <td class="text text-success">Kitob qaytarilgan</td>

                @endif
{{--                <td><a href="{{route('showborrower',$d->ktb->id)}}" class="btn btn-outline-primary " >Ko'rish</a></td>--}}
          <td>{{$d->sana}}</td>
            </tr>
            @empty
                <h1 class="text text-success"> Hozircha ma'lumot yo'q </h1>
            @endforelse




        </table>
    </div>
@endsection
