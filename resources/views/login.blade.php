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
<div class="container d-flex justify-content-center align-items-center ">


<form action="{{route('login_1')}}" method="post" class="col-4 mt-5 p-2"  style=" border-radius: 10px;background: #eceffa; box-shadow: 0px 0px 10px 10px #c5c2c2">
    <h1 class="text text-primary " align="center"> Tizimga kirish</h1>
    @if($errors->any())
        <h2 class="text text-danger">Login yoki parol xato !</h2>
    @endif
    <!-- Email input -->
    @csrf
    <div class="form-outline mb-4"> <label class="form-label" for="form2Example1">Login</label>
        <input type="text" name="login" id="form2Example1" class="form-control" />

    </div>

    <!-- Password input -->
    <div class="form-outline mb-4"> <label class="form-label" for="form2Example2">Parol</label>
        <input type="password" name="parol" id="form2Example2" class="form-control" />

    </div>






    <!-- Submit button -->
    <button type="submit" class="btn btn-primary form-control mb-4">Kirish</button>

    <!-- Register buttons -->


</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
