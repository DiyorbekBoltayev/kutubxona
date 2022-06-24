@extends('welcome')
@section('title','Kitob qo`shish')
@section('content')
<div class="container" style="padding: 50px;">
    <h1 class="text text-center text-primary">Kitob ma'lumotlarini kiritish oynasi</h1>
    <div class="form-katta">
        <form>
            @csrf
            <div class="mb-3">
                <label for="kitob_id" class="form-label">Kitob ID si:</label>
                <input type="number" class="form-control" id="kitob_id" value="" >
            </div>
            <div class="mb-3">
                <label for="kitob_nomi" class="form-label">Kitob Nomi:</label>
                <input type="text" class="form-control" id="kitob_nomi" >
            </div>
            <div class="mb-3">
                <label for="kitob_yozuvchi" class="form-label">Kitob Yozuvchi:</label>
                <input type="text" class="form-control" id="kitob_yozuvchi">
            </div>
            <div class="mb-3">
                <label for="kitob_joylashuv" class="form-label">Kitob Joylashuvi:</label>
                <input type="text" class="form-control" id="kitob_joylashuv">
            </div>
            <div class="mb-3">
                <label for="kitob_yili" class="form-label">Yozilgan yili:</label>
                <input type="text" class="form-control" id="kitob_yili">
            </div>


            <input type="submit"  class="form-control btn btn-primary"  value="Saqlash">
        </form>
    </div>
</div>
@endsection
