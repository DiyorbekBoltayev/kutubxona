@extends('master')
@section('title','Kitob qo\'shish')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Yangi kitob ma'lumotlarini kiriting</h1>
        <form action="{{route('add_books')}}" method="post">
        <div class="form-floating mb-3">
            <input type="number" name="mahalliy_id" class="form-control" id="mahalliy_raqam" autocomplete="off"   required  placeholder="name@example.com">
            <label for="mahalliy_raqam">Mahalliy raqami</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="sarlavha" class="form-control" id="sarlavha" autocomplete="off"   required  placeholder="name@example.com">
            <label for="sarlavha">Sarlavha</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="muallif" class="form-control" id="muallif"  autocomplete="off"   required placeholder="name@example.com">
            <label for="muallif">Muallif</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="kitob_turi" class="form-control" id="kitob_turi"  autocomplete="off"   required placeholder="name@example.com">
            <label for="kitob_turi">Kitob turi</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="nashr_yili" class="form-control" id="nashr_yili" autocomplete="off"    required  placeholder="name@example.com">
            <label for="nashr_yili">Nashr qilingan yili </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="nashriyot" class="form-control" id="nashriyot"  autocomplete="off"  required  placeholder="name@example.com">
            <label for="nashriyot">Nashriyot</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="javon" class="form-control" id="javon"  autocomplete="off"  required  placeholder="name@example.com">
            <label for="javon">Joylashgan javon va tokcha</label>
        </div>
            <input type="submit" name="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >

          {{csrf_field()}}
        </form>

    </div>
@endsection

