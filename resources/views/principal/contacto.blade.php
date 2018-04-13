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
    <div class="col-sm-6">
             <p>Domingos cerrado, en caso de anular tu reserva hacerlo con 24 hs de anticipación</p>
              <p><span class="icon-location"></span> Av. Rivadavia 13778 - Ramos Mejía</p>
              <p><span class="icon-mobile"></span> +00 1515151515</p>
              <p><span class="icon-mail-alt"></span> myemail@something.com</p> 
              <hr>
              
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
            <div class="col-sm-12 form-group">
                <textarea class="" id="comments" name="comments" placeholder="Comentario" rows="6" style="width:100%"></textarea><br>
            </div>
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Enviar</button>
            </div>
    </div>
  </div>
</div>
</section>