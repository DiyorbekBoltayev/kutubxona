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

    <form action="{{route('add_books')}}" method="post">
        <h2 class=" text-success">Kitob ma'lumotlari kiriting va qidiring !</h2>
        <div class="form-floating mb-3">
            <input type="text" name="sarlavha" class="form-control" id="sarlavha" autocomplete="off"   required  placeholder="name@example.com">
            <label for="sarlavha">Sarlavha bo'yicha qidirish</label>
            <div id="sarlavhalist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="muallif" class="form-control" id="muallif"  autocomplete="off"   required placeholder="name@example.com">
            <label for="muallif">Muallif bo'yicha qidirish</label>
            <div id="mualliflist" > </div>
        </div>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>Mahalliy id</th>
                    <th>Sarlavha</th>
                    <th>Muallif</th>
                    <th>Joylashuv</th>
                    <th>Holati </th>
                </tr>
                <tr>
                    <td>1777</td>
                    <td>Xamsa</td>
                    <td>Alisher Navoiy</td>
                    <td class="text-danger">Berilgan</td>
                    <td><a href="{{route('showborrower')}}" class="btn btn-secondary " >Berilgan </a></td>
                </tr>
                <tr>
                    <td>1227</td>
                    <td>Xamsa</td>
                    <td>Alisher Navoiy</td>
                    <td>2-javon</td>
                    <td><a href="{{route('confirmborrow')}}" class="btn btn-primary" >Berish </a></td>
                </tr>
            </table>
        </div>

        {{csrf_field()}}
    </form>

@endsection
