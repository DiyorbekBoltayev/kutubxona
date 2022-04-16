@extends('master')
@section('content')
    <h1 class="text text-success">Berishni tasdiqlash</h1>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Mahalliy id</th>
                <td>1111</td>
            </tr><tr>
                <th>Sarlavha</th>
                <td>Hamsa</td>
            </tr><tr>
                <th>Muallif</th>
                <td>Alisher Navoiy</td>
            </tr><tr>
                <th>Kitob turi</th>
                <td>Badiiy</td>
            </tr><tr>
                <th>Joylashuvi</th>
                <td>2-javon</td>
            </tr><tr>
                <th>Nashriyot</th>
                <td>Diyor print</td>
            </tr><tr>
                <th>Nashr qilngan yili</th>
                <td>2027</td>
            </tr>

        </table>

        <form action="">

            <div class="form-floating mb-3">
                <input type="" name="muallif" class="form-control" id="muallif"  autocomplete="off"   required placeholder="name@example.com">
                <label for="muallif">Fozdalanuvchi guruhini kiritish</label>
                <div id="mualliflist" > </div>
            </div>
            <div class="form-floating mb-3">
            <input type="" name="muallif" class="form-control" id="muallif"  autocomplete="off"   required placeholder="name@example.com">
            <label for="muallif">Fozdalanuvchini kiritish</label>
            <div id="mualliflist" > </div>
            </div>
            <input type="submit" name="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >

        </form>
    </div>
@endsection
