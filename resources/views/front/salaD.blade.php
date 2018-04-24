@extends('index')
@section('contenido')

    @include('front.parciales.inicio')
    <div class="container">
        <div class="row especificaciones">
            <h2 class="text-center">ESPECIFICACIONES</h2>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3 fondo-gris">
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/gtr.svg')}}" alt="gtr"  title="equipos guitarra" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-lg-8 text-especificaciones">
                        <p>Cabezales Marshall valvestate mod 8100 ingles, cajas de viola Marshall mod 8412 ingles</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/bass.svg')}}" alt="bass"  title="equipo bajo" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-lg-8  text-especificaciones">
                        <p>Cabezal Peavey Mark III bass xp series USA, caja de bajo Electro Voice 2 x 15” USA</p>
                    </div>
                </div>    
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/control.svg')}}" alt="control"  title="consola" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-lg-8  text-especificaciones">
                        <p>Fender SRM 6302 USA</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/mic.svg')}}" alt="voz"  title="voz" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-lg-8  text-especificaciones">
                        <p>Marshall S112H 1x12” inglesas+ drivers rango expandido, micrófonos 3 samsom Q7</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/drum.svg')}}" alt="drum"  title="bateria" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-lg-8  text-especificaciones">
                        <p>Pearl Export Series año 90 tilo 6 cuerpos, medidas 22”,16”,14”,13”,12”. Tambor 14”</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/size.svg')}}" alt="size"  title="dimensiones" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>3,50 m x 3,50 m (Mínimo 2 horas)</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/rec.svg')}}" alt="rec"  title="grabación" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 col-xs-2 col-lg-8  text-especificaciones">
                        <p>Samson CO1</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12  text-especificaciones telefonos">
                        <h4><span class="icon-mobile"></span>Reservas: 4658-4659 / 15-2667-44253</h4>
                        <h4><span class="icon-location"></span>Av Rivadavia 13778</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <br>
                <h2>MAS IMAGENES</h2>
                @include('front.parciales.slideD')
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <br>
                <h2>OTRAS SALAS</h2>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <h4>SALA A</h4>
                        <a href="{!!URL::to('/salas/sala-A')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala1.jpg')}}" alt="sala1">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h4>SALA B</h4>
                        <a href="{!!URL::to('/salas/sala-B')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala2.jpg')}}" alt="sala1">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h4>SALA C</h4>
                        <a href="{!!URL::to('/salas/sala-C')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala3.jpg')}}" alt="sala1">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <br>
                <a href="{!!URL::to('/')!!}" class="btn btn-lg btn-default">Volver</a>
            </div>
        </div>
    </div>
    
@endsection




