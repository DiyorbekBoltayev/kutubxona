<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Kutubxona</title>
</head>
<body>

<div class="w-100 d-flex justify-content-between align-items-center p-4" style="background: #07294d;; box-shadow: 0px 0px 5px 5px #07294d;" >
    <h3 class="text-white">Kutubxonadan foydalanish uchun ro'yhatdan o'tish sahifasi</h3>
    <a class="btn btn-outline-warning" href="/login_1">Kutubxonachi sifatida kirish</a> </div>
<div class="container mt-2" style="background: #ebefeb; box-shadow: 0px 5px 5px 5px #ebefeb">
    <h1 class="text-primary">Ma'lumotlarni kiriting</h1>
    <div>
        <form action="{{route('registeruser')}}" method="post">
            {{csrf_field()}}
            <div class="form-floating mb-3">
                <input type="text" name="ism" class="form-control" id="ism"  autocomplete="off"  required  placeholder="name@example.com">
                <label for="ism">Ism</label>
                <div id="familyalist" > </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="familya" class="form-control" id="familya"  autocomplete="off"  required  placeholder="name@example.com">
                <label for="familya">Familya</label>
                <div id="familyalist" > </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="otasining_ismi" class="form-control" id="otasining_ismi"  autocomplete="off"  required  placeholder="name@example.com">
                <label for="otasining_ismi">Otasining ismi</label>
                <div id="otasining_ismilist" > </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="telefon" class="form-control" id="telefon"  autocomplete="off"  required  placeholder="name@example.com">
                <label for="telefon">Telefon raqami</label>
                <div id="telefonlist" > </div>

            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="guruh" id="guruh" required aria-label="Default select example">
                    <option value="" selected disabled>Guruhni tanlang</option>
                    @foreach($guruh as $g)
                        <option value="{{$g->id}}">{{$g->guruh}}</option>
                    @endforeach
                </select>
                <label for="guruh">Guruh</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="jins" id="jins" required aria-label="Default select example">
                    <option value="">Jinsni tanlang</option>
                    <option value="1">Erkak</option>
                    <option value="0">Ayol</option>

                </select>
                <label for="jins">Jinsi</label>
            </div>
            <div class="form-floating mb-3">
            <select class="form-select" name="viloyat" id="viloyat" required aria-label="Default select example">
                <option value="" selected disabled>Ro'yhatda turgan viloyatingizni tanlang</option>
                @foreach($viloyat as $vil)
                    <option value="{{$vil->id}}">{{$vil->viloyat}}</option>
                @endforeach
            </select>
                <label for="viloyat">Viloyat</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select"id="tuman" name="tuman" required aria-label="Default select example">
                    <option value="" selected disabled>Tumanni tanlang</option>

                </select>
                <label for="tuman">Tuman</label>
            </div>
            <input type="submit" class="btn btn-outline-success w-100" value="Ro'yhatdan o'tish">
        </form>


        </div>

    </div>

</div>
<div class="w-100  mt-5" style="height: 100px; background: #07294d;; box-shadow: 0px 0px 5px 5px #07294d;">
    <script>
        $(document).ready(function (){
            $("#viloyat").on('change',function () {
                let query=$(this).val();
                $("#tuman").empty();
                $("#tuman").append('<option value="0" disabled selected >Kuting...</option>');
                var _token=$('input[name="_token"]').val();
                $.ajax({
                    type:'post',
                    url:'{{route('tumanauto')}}',
                    data:{query:query,_token:_token},
                    success:function (data) {


                        $("#tuman").empty();


                            $("#tuman").append(data);


                    }
                });
            });

        });
    </script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
