<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }
    .wrap{
        background: rgb(32, 27, 27);
        padding: 30px;
        font-family: sans-serif;
        width: 100vw;
        height: 100vh;
    }

    .nav{
        background: white;
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
        color: rgb(74, 211, 230);
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
    .h1{
        margin-top: 20px;
        color: white
    }
</style>
<body>
    <div class="wrap">
        <div class="nav">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="./login">LOGIN</a></li>
                <li><a href="./services">SERVICES</a></li>
                <li><a href="./about">ABOUT</a></li>
            </ul>
        </div>
        <h1 class="h1">Home</h1>
    </div>
</body>
</html>