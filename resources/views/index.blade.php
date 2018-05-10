<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salas | Bolivar</title>
    <link rel="icon" href="/img/rock-and-roll.png" />
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/estilos.css" rel="stylesheet" type="text/css">
    <script src="/js/scrollreveal.min.js"></script>
    <!--[if IE 8]>
    <SCRIPT LANGUAGE="Javascript">
    alert("Sitio no compatible con Internet Explorer 8");
    </SCRIPT>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="60">

    @yield('contenido') 
    @include('principal.footer')

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/scroll.js"></script>
    <script type="text/javascript" src="/js/modal.js"></script>
</body>

</html>