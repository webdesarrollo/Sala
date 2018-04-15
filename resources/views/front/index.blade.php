@extends('index')
@section('contenido')
    <section id="inicio" class="secction1">
        <div class="wrapper">
            <div class="jumbotron text-center">
                <h1 class="titulo-principal">Salas Bolivar</h1> 
                <p class="sub-titulo">{{$sala}}</p> 
            </div>
        </div>
    </section>
    @include('front.especificaciones') 
    
@endsection




