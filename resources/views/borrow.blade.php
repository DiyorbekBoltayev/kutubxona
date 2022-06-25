@extends('master')
@section('content')
{{--    <h1 class="text text-primary text-center"> Kitob berish oynasi</h1>--}}
    @if (session()->has('message'))
        <div id="mes1" class="alert alert-dismissable alert-success" >

            <strong>
                {!! session()->get('message') !!}
            </strong>
        </div>
    @endif

    <form action="{{route('kitob_izla')}}" method="post">
        @csrf
        <h2 class=" text-success">Kitob ma'lumotlari kiriting va qidiring !</h2>
        <div class="form-floating mb-3">
            <input type="text" name="sarlavha" class="form-control" id="sarlavha" autocomplete="off"     placeholder="name@example.com">
            <label for="sarlavha">Sarlavha bo'yicha qidirish</label>
            <div id="sarlavhalist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="muallif" class="form-control" id="muallif"  autocomplete="off"    placeholder="name@example.com">
            <label for="muallif">Muallif bo'yicha qidirish</label>
            <div id="mualliflist" > </div>
        </div>
        <div class="form-floating mb-3">
            <button type="submit" class="btn btn-success">Izlash</button>
        </div>
    </form>
@if($data!=null)
        <div>
            <table class="table table-striped">
                <tr>
                    <th>Mahalliy id</th>
                    <th>Sarlavha</th>
                    <th>Muallif</th>
                    <th>Joylashuv</th>
                    <th>Amal </th>
                </tr>
                @foreach($data as $dd)
                    @foreach($dd as $d)
                    <tr>
                        <td>{{$d->local_id}}</td>
                        <td>{{$d->sarlavha->sarlavha}}</td>
                        <td>{{$d->muallif->muallif}}</td>
                        <td>
                            @if($d->holati==0)
                                <p class="text text-success"></p>
                            {{$d->javon->javon}}
                            @else
                                <p class="text text-danger">Berilgan</p>
                            @endif

                        </td>
                        <td>
                            @if($d->holati==0)
                                <a href="{{route('confirmborrow',$d->id)}}" class="btn btn-primary" >Berish </a>
                            @else
                                <a href="{{route('showborrower',$d->holati)}}" class="btn btn-secondary " >Ko'rish </a>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                @endforeach

            </table>
        </div>
@endif


@endsection
