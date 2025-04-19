<?php

session_start();


if(!isset($_SESSION["username"])){
    header("Location: Login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HOME</title>   
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }


        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem;
            height: 4rem;
            background: rgb(0, 2, 18);
        }

        h1{
            /* border: 1px solid red; */
            color:#fff;
        }

        #btn_logout{
            background: transparent;
            border: 2px solid white;
            color: #fff;
            font-weight: 777;
            padding: 0.4rem;
            margin-top: auto;
            cursor: pointer;
        }

        h2, p{
            color: #fff;
        }

        .message{
            margin: 2rem;
        }
    </style>

</head>

<body bgcolor="#333">

    <header>

        <h1>HOME</h1>
        <a href="LogOut.php"><button id="btn_logout">Log-out</button></a>
        
    </header>

       <div class="message">
       <h2>Hello friends!</h2>
        <p>This is a simple Login system website using session.</p>

       </div>

    </body>
</html>