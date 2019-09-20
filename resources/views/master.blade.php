<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark navbar-fixed-top mb-10">
        <div class="container">
            <a class="navbar-brand" href="/employees">Employees</a>
        </div>        
    </div>
    <div class="container">
        <!--================Content Area =================-->
        @yield('content')
        <!--================End Content Area =================-->
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body> 
</html>