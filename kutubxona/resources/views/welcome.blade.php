<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }
        .buttonload {
            background-color: #04AA6D; /* Green background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 12px 16px; /* Some padding */
            font-size: 16px /* Set a font size */
        }
        .sidebar {
            margin: 0;
            padding: 0;
            width: 300px;
            background-color: #c6c6c6;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 300px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>

    <title>@yield('title')</title>
</head>

<div class="sidebar" style="display: flex;flex-wrap: wrap;justify-content: center; align-items: start">
    <div style="width: 100%; height: 100px">
        <a href="{{url('/')}}" style="width: 100%; height: 50px" class="btn-success text-white">+ Kitob qo'shish </a>
    </div>

    <hr>
    <div class="search-usti"
         style="width: 90%; border-radius: 10px; display: flex;flex-wrap: wrap ;justify-content: center; align-items: center
                   ;background-color: #ffff" >
    <div class="div" style="padding-top: 20px;">
        <h1> Kitob izlash </h1>
    </div>
        <div style="padding: 10px;">
            <form action="{{url('search')}}" style="padding: 17px" method="post" >
                @csrf
                <label style="margin-left: 10px;" for="input">Kalit so'zni kiriting:</label>
                <input class="border-primary" required name="search" style="width: 100%; border-radius: 10px; height: 40px;" type="text" value="{{old('search')}}">

                <div style="background-color:#afd8f3; border-radius: 10px; padding: 10px;margin: 5px; margin-left: 0px;"  >
                    <input type="checkbox" id="ch1" value="checked">
                    <label for="ch1">O'zbek adabiyoti</label>
                    <br>
                    <input type="checkbox" id="ch2" value="checked">
                    <label for="ch2">Jahon adabiyoti</label>
                    <br>
                    <input type="checkbox" id="ch3" value="checked">
                    <label for="ch3">Yozuvchi</label>
                    <br>
                    <input type="checkbox" id="ch4" value="checked">
                    <label for="ch4">Dasturlash</label>
                    <br>
                </div>


                <input style="border-radius: 10px; margin-right: 10px; width: 98%;" type="submit" class="btn btn-primary" value="Izlash">

            </form>
        </div>



</div>
</div>
<div class="content">
    @yield('content')

</div>
<!-- JavaScript Bundle with Popper -->

</body>
</html>
