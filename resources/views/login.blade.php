<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset('Assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body class="bg-dark">
    @include('Layout.navbar')
    <h1 class="ms-4 mt-4 text-light text-center">LOGIN</h1>
    <form method="post" action="loginpost" class="row g-3 mx-4 bg-info justify-content-center mt-4">
        @csrf

  <div class="col-auto ">
    <label for="staticEmail2" class="visually-hidden">name</label>
    <input type="text" name='name'  class="form-control" id="staticEmail2" placeholder="name">
  </div>  
  <div class="col-auto ">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" name='telephone'  class="form-control" id="staticEmail2" placeholder="Telephone">
  </div>      

  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name='password' class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">Login here</button>
  </div>
</form>
  
</body>
</html>