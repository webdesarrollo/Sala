<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="carousel" id="media" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner">
                    <!--ITEM 1-->
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail">
                                    <img src="{{asset('img/sala-B/sala_0.jpg')}}" alt="img1" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail" >
                                    <img src="{{asset('img/sala-B/sala_1.jpg')}}" alt="img2" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail" >
                                    <img src="{{asset('img/sala-B/sala_2.jpg')}}" alt="img3" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--ITEM 2-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail" >
                                    <img src="{{asset('img/sala-B/sala_3.jpg')}}" alt="img3" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail" >
                                    <img src="{{asset('img/sala-B/sala_4.jpg')}}" alt="img3" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-md-4">
                                <a class="thumbnail">
                                    <img src="{{asset('img/sala-B/sala_5.jpg')}}" alt="img3" id="img" data-toggle="modal" data-target=".bs-modal-sm" onclick="muestraImagen(this)">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                <a data-slide="next" href="#media" class="right carousel-control">›</a>
            </div> 
        </div>
    </div>
</div>
@include('front.parciales.modal')
