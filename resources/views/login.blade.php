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
   
    <div class=" row bg-primary px-3 py-3   justify-content-center container-fluid">
    <div class="col-6 bg-dark d-flex p-3 justify-content-center">

      <form method="post" action="loginpost" class="row  mb-3 g-3 p-2 col-6 mx-4 bg-light rounded justify-content-center flex mt-4">
          @csrf
  
    <div class="row-auto">
      <label for="staticEmail2" class="text-dark mb-2 mt-2">NAME</label>
      <input type="text" name='name'  class="form-control" id="staticEmail2" placeholder=" your name">
    </div>  
  
    <div class="row-auto">
      <label for="staticEmail2" class="text-dark mb-2 mt-2">TELEPHONE</label>
      <input type="text" name='telephone'  class="form-control" id="staticEmail2" placeholder=" your telephone">
    </div> 
    <div class="row-auto">
      <label for="staticEmail2" class="text-dark mb-2 mt-2">EMAIL</label>
      <input type="text" name='email'  class="form-control" id="staticEmail2" placeholder="example@gmail.com">
    </div>      
  
    <div class="row-auto">
      <label for="inputPassword2" class="text-dark mb-2 mt-2">PASSWORD</label>
      <input type="password" name='password' class="form-control" id="inputPassword2" placeholder="your Password">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Login here</button>
    </div>
  </form>
    </div>

    <div class="col-5 bg-secondary bg-gradient d-flex p-3 justify-content-center ">
        <img  src="{{asset('img/web.jpg')}}" width="500"/>
    </div>
    </div>
    
  
</body>
</html>