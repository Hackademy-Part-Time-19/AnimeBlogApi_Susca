<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApiAnime</title>
@vite(['resources/css/app.css','resources/js/app.js'])
<style>

    h1   {color: rgb(255, 255, 255);}
    p    {color: rgb(255, 255, 255);}
    h5 {color: rgb(255, 255, 255);}
    a {text-decoration: none;  }
    a { color: #dbdbdb; }


    </style>
</head>


<body style="background-color: black">

    {{$slot}}
</body>
</html>
