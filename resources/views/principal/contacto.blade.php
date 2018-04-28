<section class="section3" id="contacto">
  <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2><br>
  <div class="row">
    <div class="col-sm-6">
        <!-- Google Maps -->
        <div id="googleMap" style="height:400px;width:100%;"></div>
        <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(-34.640337, -58.5634745);
        var mapProp = {center:myCenter, zoom:15, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf_BoHLUXV5yyQ_e52rsVoyTETuJH2dsA&callback=myMap"></script>
    </div>
    <div class="col-sm-6" id="contactoForm">
            <div class="info-derecha">
                <br class="solo-xs">
                <p>Domingos cerrado, en caso de anular tu reserva hacerlo con 24 hs de anticipación</p>
                <p><span class="icon-location"></span> Av. Rivadavia 13778 - Ramos Mejía</p>
                <p><span class="icon-mobile"></span> 4658-4659 / 15-2667-44253</p>
                <p><span class="icon-mail-alt"></span> salasdeensayobolivar@gmail.com</p>
            </div>   
            <hr>
            @include('alertas.mensaje')  
            {!!Form::open(['route'=>'contacto.store','method'=>'POST'])!!}
            <div class="col-sm-6 form-group">
              {!!Form::text('nombre',null,['placeholder'=>'Nombre','class'=>'form-control','required'])!!}
            </div>
            <div class="col-sm-6 form-group">
                {!!Form::email('email',null,['placeholder'=>'Email','class'=>'form-control','required'])!!}
            </div>
            <div class="col-sm-12 form-group">
                {!!Form::textarea('mensaje',null,['placeholder'=>'Comentario','rows'=>'6','style'=>'width:100%','required'])!!}
                <br>
            </div>
            <div class="col-sm-12 form-group">
              {!!Form::submit('Enviar',['class'=>'btn btn-default pull-right','data-toggle'=>'modal','data-target'=>'#myModal'])!!}
            </div>
            {!!Form::close()!!}
    </div>
  </div>
</div>
</section>
