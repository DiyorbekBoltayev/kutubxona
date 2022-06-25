@extends('master')
@section('content')
    <h1 class="text text-success">Berishni tasdiqlash</h1>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Local_id </th>
                <td>{{$book->local_id}}</td>
            </tr>
            <tr>
                <th> Kitob sarlavhasi </th>
                <td>{{$book->sarlavha->sarlavha}}</td>
            </tr>
            <tr>
                <th>Kitob muallifi</th>
                <td>{{$book->muallif->muallif}}</td>
            </tr>
            <tr>
                <th>Kitob turi</th>
                <td>{{$book->turi->kitob_turi}}</td>
            </tr>
            <tr>
                <th>Yili</th>
                <td>{{$book->yili}}</td>
            </tr>
            <tr>
                <th>Joylashgan javon</th>
                <td>{{$book->javon->javon}}</td>
            </tr>
            <tr>
                <th>Nashriyot</th>
                <td>{{$book->nashriyot->nashriyot}}</td>
            </tr>
            <tr>
                <th>Izoh</th>
                <td>{{$book->izoh}}</td>
            </tr>





        </table>


    </div>



        <form action="{{route('zzz')}}" method="post">
@csrf
            <input type="hidden" name="id" value="{{$book->id}}">
         <div class="form-floating mb-3">
                <select class="form-select" name="guruh_id" id="guruh" required aria-label="Default select example">
                    <option value="" selected disabled>Guruhni tanlang</option>
                    @foreach($guruh as $g)
                        <option value="{{$g->id}}">{{$g->guruh}}</option>
                    @endforeach
                </select>
                <label for="guruh">Guruh</label>
            </div>
         <div class="form-floating mb-3">
                <select class="form-select" name="student_id" id="guruh" required aria-label="Default select example">
                    <option value="" selected disabled>Kitobxonni tanlang</option>
                    @foreach($student as $g)
                        <option value="{{$g->id}}">{{$g->ism}} {{$g->familya}}</option>
                    @endforeach
                </select>
                <label for="guruh">Kitobxon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="olgan" required class="form-control">
                <label for="guruh">Olgan sanasi</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="berish" required class="form-control">
                <label for="guruh">Berish sanasi</label>
            </div>
            <input type="submit" name="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >

        </form>
    </div>
@endsection
