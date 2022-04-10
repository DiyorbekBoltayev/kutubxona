@extends('master')
@section('title','Kitob qo\'shish')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Yangi kitob ma'lumotlarini kiriting</h1>
        <form action="">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Mahalliy raqami</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Sarlavha</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Muallif</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Kitob turi</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput"  placeholder="name@example.com">
            <label for="floatingInput">Nashr qilingan yili </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nashriyot</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Joylashgan javon va tokcha</label>
        </div>
            <input type="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >


        </form>

    </div>
@endsection

