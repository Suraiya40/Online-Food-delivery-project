
<?php
include_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url(background1.jpg);
            width: 100%;
            height: 100vh;
            font-family: 'sans-serif';
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .div{
            text-align: center;
            color: rgb(255, 163, 163);
            font-size: 30px;
            margin: 300px;

        }

        h1{
            text-align: center;
            color: rgb(255, 163, 163);
            font-size: 60px;
        }
        a{
            text-align: center;
            color: rgb(255, 163, 163);
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="div">
    <h1>Welcome user</h1>
    <a href="home.html">Home Page</a>
    </div>
</body>
</html>