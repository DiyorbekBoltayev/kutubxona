@extends('master')
@section('title','Kitob qo\'shish')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Yangi kitob ma'lumotlarini kiriting</h1>
        @if (session()->has('message'))
            <div id="mes1" class="alert alert-dismissable alert-success" >

                <strong>
                    {!! session()->get('message') !!}
                </strong>
            </div>
        @endif

        <form action="{{route('add_books')}}" method="post">
        <div class="form-floating mb-3">
            <input type="number" name="mahalliy_id" class="form-control" id="mahalliy_id" autocomplete="off"   required  placeholder="name@example.com">
            <label for="mahalliy_id">Mahalliy raqami</label>
            <div id="mahalliyidlist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="sarlavha" class="form-control" id="sarlavha" autocomplete="off"   required  placeholder="name@example.com">
            <label for="sarlavha">Sarlavha</label>
            <div id="sarlavhalist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="muallif" class="form-control" id="muallif"  autocomplete="off"   required placeholder="name@example.com">
            <label for="muallif">Muallif</label>
            <div id="mualliflist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="kitob_turi" class="form-control" id="kitob_turi"  autocomplete="off"   required placeholder="name@example.com">
            <label for="kitob_turi">Kitob turi</label>
            <div id="kitob_turilist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="nashr_yili" class="form-control" id="nashr_yili" autocomplete="off"    required  placeholder="name@example.com">
            <label for="nashr_yili">Nashr qilingan yili </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="nashriyot" class="form-control" id="nashriyot"  autocomplete="off"  required  placeholder="name@example.com">
            <label for="nashriyot">Nashriyot</label>
            <div id="nashriyotlist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="javon" class="form-control" id="javon"  autocomplete="off"  required  placeholder="name@example.com">
            <label for="javon">Joylashgan javon va tokcha</label>
            <div id="javonlist" > </div>
        </div>
            <input type="submit" name="submit" class="form-control btn-outline-success" value="Barcha ma'lumotlarni saqlash" >

          {{csrf_field()}}
        </form>


    </div>
    <script>
        $(document).ready(function () {
            $(document).on('click','#mes1',function () {
                $('#mes1').fadeOut();
            })
            //mahalli id uchun
            $('#mahalliy_id').keyup(function () {
                var query=$(this).val();

                if(query.length>0){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('mahalliyidauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#mahalliyidlist').fadeIn();
                            $('#mahalliyidlist').html(data);


                        }
                    });

                    $(document).on('click','#li_mahalliyid',function () {
                        $('#mahalliy_id').val($(this).text());
                        $('#mahalliyidlist').fadeOut();
                    })

                }
            });

            //nashriyot uchun
            $('#nashriyot').keyup(function () {
                var query=$(this).val();

                if(query.length>1){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('nashriyotauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#nashriyotlist').fadeIn();
                            $('#nashriyotlist').html(data);


                        }
                    });

                    $(document).on('click','#li_nashriyot',function () {
                        $('#nashriyot').val($(this).text());
                        $('#nashriyotlist').fadeOut();
                    })

                }
            });
            //sarlavha uchun

            $('#sarlavha').keyup(function () {
                var query=$(this).val();

                if(query.length>0){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('sarlavhaauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#sarlavhalist').fadeIn();
                            $('#sarlavhalist').html(data);


                        }
                    });


                    $(document).on('click','#li_sarlavha',function () {
                        $('#sarlavha').val($(this).text());
                        $('#sarlavhalist').fadeOut();
                    })

                }
            });

            //muallif uchun
            $('#muallif').keyup(function () {
                var query=$(this).val();

                if(query.length>0){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('muallifauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#mualliflist').fadeIn();
                            $('#mualliflist').html(data);


                        }
                    });


                    $(document).on('click','#li_muallif',function () {
                        $('#muallif').val($(this).text());
                        $('#mualliflist').fadeOut();
                    })

                }
            });
            //kitob turi uchun
            $('#kitob_turi').keyup(function () {
                var query=$(this).val();

                if(query.length>0){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('kitobturiauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#kitob_turilist').fadeIn();
                            $('#kitob_turilist').html(data);


                        }
                    });


                    $(document).on('click','#li_kitob_turi',function () {
                        $('#kitob_turi').val($(this).text());
                        $('#kitob_turilist').fadeOut();
                    })

                }
            });
            //javon uchun
            $('#javon').keyup(function () {
                var query=$(this).val();

                if(query.length>0){

                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('javonauto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#javonlist').fadeIn();
                            $('#javonlist').html(data);


                        }
                    });


                    $(document).on('click','#li_javon',function () {
                        $('#javon').val($(this).text());
                        $('#javonlist').fadeOut();
                    })

                }
            });



        });


            </script>
@endsection

