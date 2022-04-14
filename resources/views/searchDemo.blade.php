@extends('master')
@section('title','test')
@section('content')
    <form action="">

        <div class="form-floating mb-3">
            <input type="text" name="nashriyot" class="form-control" id="nashriyot_id" autocomplete="off" placeholder="name@example.com">
            <label for="nashriyot_id">Nashriyot</label>
            <div id="nashriyotlist" > </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="kitob" class="form-control" id="kitob_id" autocomplete="off" placeholder="name@example.com">
            <label for="kitob_id">Kitob</label>
            <div id="kitoblist" > </div>
        </div>

        {{csrf_field()}}
    </form>

    <script>
        $(document).ready(function () {
            //nashriyot uchun
            $('#nashriyot_id').keyup(function () {
                var query=$(this).val();
                console.log('ifdan aldin');
                if(query != ''){
                    console.log('ifni ichi');
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('auto')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#nashriyotlist').fadeIn();
                            $('#nashriyotlist').html(data);

                           console.log(data);
                        }
                    });
                    console.log('ajaxdan keyin')

                }
            });
            $(document).on('click','#li1',function () {
                $('#nashriyot_id').val($(this).text());
                $('#nashriyotlist').fadeOut();
            })
    //kitob uchun
            $('#kitob_id').keyup(function () {
                var query=$(this).val();
                console.log('2-ifdan aldin');
                if(query != ''){
                    console.log('2-ifni ichi');
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('kitob')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function (data) {

                            $('#kitoblist').fadeIn();
                            $('#kitoblist').html(data);

                            console.log(data);
                        }
                    });
                    console.log('2-ajaxdan keyin')

                }
            });
            $(document).on('click','#l1',function () {
                $('#kitob_id').val($(this).text());
                $('#kitoblist').fadeOut();
            })
        });
    </script>
@endsection
