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
    <title>@yield('title')</title>
</head>
<body>
{{--    Navbar boshlandi --}}
<nav class="navbar navbar-expand-lg navbar-light border-bottom border-primary " style="box-shadow: 0px 0px 5px 5px #929ff3; background-color: #f0f3f4">
    <a class="navbar-brand m-2 mb-0 mt-0" href="{{url('/')}}"><img class="card-img" style="height:50px" src="https://i.pinimg.com/736x/a7/91/0c/a7910cf32f182c9ea34022abb7839980--library-logo-library-design.jpg" alt=""></a>


    <div class="collapse navbar-collapse d-flex justify-content-end  " style="margin-right: 150px; font-size: large" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-flex align-items-center ">
{{--            //kitoblar--}}
            <div class="dropdown "  >
                <a href="" style="font-size: 20px;" class=" btn btn-outline-primary dropdown-toggle border-0" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Kitoblar
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="font-size: 20px;">
                    <li><a href="{{route('addbook')}}" class="dropdown-item" type="button">Kitob qo'shish</a></li>
                    <li><a href="{{route('booklist')}}" class="dropdown-item" type="button">Kitoblar ro'yhati</a></li>
                </ul>
            </div>
{{--            //guruhlar--}}
            <div class="dropdown "  >
                <a href="" style="font-size: 20px;" class=" btn btn-outline-primary dropdown-toggle border-0" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Guruhlar
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="font-size: 20px;">
                    <li><a href="{{route('add_gr')}}" class="dropdown-item" type="button">Guruh qo'shish</a></li>
                    <li><a href="{{route('list_gr')}}" class="dropdown-item" type="button">Guruhlar ro'yhati</a></li>
                </ul>
            </div>
{{--            //javonlar--}}
            <li class="nav-item active btn fs-5">
                <a class="nav-link text-primary" style="color:{{request()->routeIs('borrow') ? '#990cdf' : '#0d6efd' }} " href="{{route('borrowbook')}}">Kitob berish</a>
            </li>
            <li class="nav-item active btn fs-5">
                <a class="nav-link text-primary" href="{{route('muddat')}}">Muddati o'tganlar</a>
            </li>
            <li class="nav-item active btn fs-5">
                <a class="nav-link text-primary" href="{{route('statistika')}}">Statistika</a>
            </li>

        </ul>

    </div>
</nav>

{{--    Navbar tugadi--}}
<div class="container pt-3 " style="background-color: #f0f3f4">



    @yield('content')
    <div style="height: 40px"></div>
</div>

<footer style="width: 100%; height: 200px; background-color: #4a5568">
<h1 class="text text-primary"> Footer qismi</h1>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
