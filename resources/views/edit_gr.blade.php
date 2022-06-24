@extends('master')
@section('title','Kitob qo\'shish')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Yangi guruh qo'shish</h1>
        @if (session()->has('message'))
            <div id="mes1" class="alert alert-dismissable alert-success" >

                <strong>
                    {!! session()->get('message') !!}
                </strong>
            </div>
        @endif

        <form action="{{route('update_gr')}}" method="post">
            <input type="hidden" name="id" value="{{$gr->id}}">
            <div class="form-floating mb-3">
                <input type="text" name="guruh" value="{{$gr->guruh}}" class="form-control" id="mahalliy_id" autocomplete="off"   required  placeholder="name@example.com">
                <label for="mahalliy_id">Guruh nomi</label>
            </div>
            <input type="submit" name="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >

            {{csrf_field()}}
        </form>


    </div>
@endsection


