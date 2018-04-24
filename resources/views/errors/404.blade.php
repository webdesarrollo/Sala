<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>404 Page Not Found Error</title>
<link rel="icon" href="/img/rock-and-roll.png"/>
{!!Html::style('css/bootstrap.min.css')!!}
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    body{font-family: 'Raleway', sans-serif;background-color:black;color:white;}
    .jumbotron{background-color:black}
    .wrapper {position: relative;height: 100vh;}
    .jumbotron {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
</style>
</head>

<body>
<div class="container text-center">
    <div class="wrapper">
    <div class="jumbotron">
        <h1>Oops</h1> 
        <h2>Error <span  class="text">404</span></h2>
        <h4>Página no encontrada!</h4>
        <a href="{!!URL::to('/')!!}" class="btn btn-primary btn-lg">Volver</a>
    </div>
    </div>
</div>    
</body>

</html>