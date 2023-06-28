<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Assets/bootstrap/css/bootstrap.min.css')}}">
    <title>ABOUT</title>
</head>

<body class="bg-dark">
    @include('Layout.navbar')
    <h1 class="btn btn-info ms-4 mt-4">ABOUT</h1>
   <p class="btn btn-info">{{$users[0]->name}}</p> 
</body>
</html>