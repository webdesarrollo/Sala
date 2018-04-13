<!DOCTYPE html>
    
<html lang="es">
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salas | Bolivar</title>
    <link rel="icon" href="/img/rock-and-roll.png"/>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <link href="'/css/estilos.css" rel="stylesheet" type="text/css" >
</head>
    
<body data-spy="scroll" data-target="#myScrollspy" data-offset="60">
    @include('principal.nav')
    @include('principal.inicio')
    @include('principal.reservas')
    @include('principal.salas')
    @include('principal.contacto')
    @include('principal.footer')
    
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
