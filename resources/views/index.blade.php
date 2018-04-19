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
    {!!Html::script('js/scrollreveal.min.js')!!}
</head>
    
<body data-spy="scroll" data-target="#myScrollspy" data-offset="60">
    
    @yield('contenido')
    @include('principal.footer')

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/main.js')!!}
    {!!Html::script('js/scroll.js')!!}
    {!!Html::script('js/modal.js')!!}
</body>
</html>