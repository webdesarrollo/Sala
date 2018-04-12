<!DOCTYPE html>
    
<html lang="es">
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salas | Bolivar</title>
    <link rel="icon" href="/img/rock-and-roll.png"/>
    <!-- Bootstrap -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/estilos.css')!!}
</head>
    
<body data-spy="scroll" data-target="#myScrollspy" data-offset="60">
    @include('principal.nav')
    @include('principal.inicio')
    @include('principal.reservas')
    @include('principal.salas')
    @include('principal.contacto')
    @include('principal.footer')

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/main.js')!!}
</body>
</html>