@extends('index')
@section('contenido')

    @include('front.parciales.inicio')
    <div class="container">
        <div class="row especificaciones">
            <h2 class="text-center">ESPECIFICACIONES</h2>
            <div class="col-lg-6 col-lg-offset-3 fondo-gris">
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/gtr.svg')}}" alt="gtr"  title="equipos guitarra" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Cabezales Marshall vs100 inglés, Cajas Marshall jcm900 1960a y 1960a Vintage inglesas</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/bass.svg')}}" alt="bass"  title="equipo bajo" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Cabezal Marshall 3530 inglés, Caja de bajo Marshall 1X15” y 4X10” inglesa</p>
                    </div>
                </div>    
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/control.svg')}}" alt="control"  title="consola" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Peavey XR680 C USA</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/mic.svg')}}" alt="voz"  title="voz" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Marshall S115H inglesa + drivers motorola, 3 Shure SM58, 3 Shure Lyrics</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/drum.svg')}}" alt="drum"  title="bateria" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Pearl Export ProSeries 6 cuerpos año 96 medidas: 22”,16”,14”,12”,10”. Tambor 14”</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-lg-2">
                        <img src="{{asset('img/rec.svg')}}" alt="rec"  title="grabación" data-toggle="tooltip-nav">
                    </div>
                    <div class="col-xs-8 col-lg-8 text-especificaciones">
                        <p>Samson CO3</p>
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
                @include('front.parciales.slideA')
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
                        <h4>SALA B</h4>
                        <a href="{!!URL::to('/salas/sala-B')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala2.jpg')}}" alt="sala1">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h4>SALA C</h4>
                        <a href="{!!URL::to('/salas/sala-C')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala3.jpg')}}" alt="sala2">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h4>SALA D</h4>
                        <a href="{!!URL::to('/salas/sala-D')!!}" class="thumbnail salas-fx">
                            <img src="{{asset('img/sala3.jpg')}}" alt="sala3">
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




