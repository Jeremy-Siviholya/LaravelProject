<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>
    body{
        background-color: black;
        font-family: sans-serif;
    }

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    .nav{
        background:white;
        padding: 20px;


    }
    .nav ul li{
        list-style-type: none;
    }
    .nav ul li a{
        color: rgb(56, 48, 48);
        text-decoration: none;
        font-weight: bold;

    }
    .nav ul li:hover{
        
        transform: translateX(3px);

    }

    .nav ul li a:hover{
        color: blue;
        text-decoration: none;
        font-weight: bold;
        transition-duration: .3s;
    }
    ul{
        display: flex;
        justify-content: end;
        align-items: center;
        gap: 30px;
    }
    body{
        background-color: black;
        font-family: sans-serif;
    }
    h1{
        color: white;
        margin-top: 20px;
        text-transform: uppercase;
    }

</style>
<body>
    <div>
        @include('Layout.navbar')
        <h1 class="h1">Home</h1>
    </div>
</body>
</html>