<div class="container padd_top_slider">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-inner">
            @foreach($slides as $slide)
            <div class="carousel-item {{ $slide->posicion }}">
                <div class="row align-items-center justify-content-center">
                    <div class="col12 col-lg-4 text-white text-center text-lg-start order-2 order-lg-1 pt-5 pt-lg-0">
                    @if($slide->pretitulo)<p class="nuevo">{{$slide->pretitulo}}</p>@endif
                    @if($slide->titulo)<h1 class="tit_carrusel">{{$slide->titulo}}</h1>@endif
                    @if($slide->subtitulo)<h2 class="subtit_carrusel">{{$slide->subtitulo}}</h2>@endif
                    @if($slide->parrafo)
                        <p class="pt-3">
                            {!! $slide->parrafo !!}
                        </p>
                    @endif
                    </div>
 
                    <div class="col12 col-lg-6 order-1">
                        @if($slide->imagen)
                        <img src="{{ $slide->imagen }}" class="d-block w-100" alt="Animal Acuario">
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
            
<!--MODAL 1-->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content marg_content_top marg_content_bottom">
                        <div class="modal-header p-0 m-0">
                            <img src="img/img_modal_4.jpg" class="img-fluid" alt="">
                            <div class="cruz_modal">
                                <img src="img/cruz.svg" height="15" alt="Cruz cerrar" data-bs-dismiss="modal" aria-label="Close">
                            </div>
                        </div>
                        
                        <div class="modal-body px-3 px-lg-5 mt-4">
                            <h1 class="tit_modal  color_celeste text-center">Feliz día Mamá</h1>
                            <h2 class="subtit_modal color_celeste pb-4 text-center">Acuario Valparaíso te celebra</h2>
                            <p class="text-center">Disfruta de una experiencia extraordinaria a través de un recorrido guiado, donde podrás conocer especies marinas chilenas, del río amazonas y de los arrecifes tropicales. </p>
                            
                            <p class="pt-5">
                                <span class="fw-bold">Fecha:</span> 08 Mayo <br><br>
                                <span class="fw-bold">Lugar:</span> Acuario Valparaíso <br><br>
                                <span class="fw-bold">Entrada General:</span> $4.900 <br><br>
                                <span class="fw-bold">Especial día de la Madre:</span> 25% dcto. (Cualquier medio de pago)<br><br>
                                <span class="fw-bold">Promoción:</span> Pagando con tus tarjetas Bci, obtén un 25% de dcto. adicional. <br><br>
                                <span class="fw-bold">** Descuento exclusivo solo para madres</span><br>
                                <span class="fw-bold">** Recuerda traer tu pase de movilidad y cédula de identidad</span><br><br>
                            </p>
                            
                            <p class="color_celeste  pt-5 text-center text-lg-start">Para más información</p>
                            <div class=" Rsociales_modal pt-3 text-center text-lg-start">
                                <a href="https://www.facebook.com/acuariovalparaiso" target="_blank"><div class="d-inline-block me-3"><i class="fab fa-facebook-f"></i></div></a>
                                <a href="https://instagram.com/acuariovalparaiso" target="_blank"><div class="d-inline-block mx-3"><i class="fab fa-instagram"></i></div></a>
                                <a href="https://www.youtube.com/channel/UC82DWEzHkS5_zgByGCVoIkg" target="_blank"><div class="d-inline-block ms-3 "><i class="fab fa-youtube"></i></div></a>
                            </div>
                        </div>
                    </div>
                </div>
</div>    
            
<!--MODAL 2-->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content marg_content_top marg_content_bottom">
                        <div class="modal-header p-0 m-0">
                            <img src="img/img_modal_2.jpg" class="img-fluid" alt="">
                            <div class="cruz_modal">
                                <img src="img/cruz.svg" height="15" alt="Cruz cerrar" data-bs-dismiss="modal" aria-label="Close">
                            </div>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                        </div>
                        
                        <div class="modal-body px-3 px-lg-5 mt-4">
                            <h1 class="tit_modal  color_celeste text-center">Acuario Valparaíso</h1>
                            <h2 class="subtit_modal color_celeste pb-4 text-center">Todo un Mundo a explorar</h2>
                            <p class="text-center">Disfruta de una experiencia extraordinaria a través de un recorrido guiado, donde podrás conocer especies marinas chilenas, del río amazonas y de los arrecifes tropicales. </p>
                            
                            <p class="pt-5">
                                <span class="fw-bold">Fecha:</span> 28 agosto <br><br>
                                <span class="fw-bold">Lugar:</span> Frontis Acuario Valparaíso <br><br>
                                <span class="fw-bold">Entrada General:</span> $6.000 <br><br>
                                <span class="fw-bold">Promoción</span> Pagando con tus tarjetas Bci, 25% de descuento. <br><br>
                            </p>
                            
                            <p class="color_celeste  pt-5 text-center text-lg-start">Para más información</p>
                            <div class=" Rsociales_modal pt-3 text-center text-lg-start">
                                <a href="https://www.facebook.com/acuariovalparaiso" target="_blank"><div class="d-inline-block me-3"><i class="fab fa-facebook-f"></i></div></a>
                                <a href="https://instagram.com/acuariovalparaiso" target="_blank"><div class="d-inline-block mx-3"><i class="fab fa-instagram"></i></div></a>
                                <a href="https://www.youtube.com/channel/UC82DWEzHkS5_zgByGCVoIkg" target="_blank"><div class="d-inline-block ms-3 "><i class="fab fa-youtube"></i></div></a>
                            </div>
                        </div>
                    </div>
                </div>
</div>  
            
<!--MODAL 3-->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content marg_content_top marg_content_bottom">
                        <div class="modal-header p-0 m-0">
                            <img src="img/img_modal_3.jpg" class="img-fluid" alt="">
                            <div class="cruz_modal">
                                <img src="img/cruz.svg" height="15" alt="Cruz cerrar" data-bs-dismiss="modal" aria-label="Close">
                            </div>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                        </div>
                        
                        <div class="modal-body px-3 px-lg-5 mt-4">
                            <h1 class="tit_modal  color_celeste text-center">Acuario Valparaíso</h1>
                            <h2 class="subtit_modal color_celeste pb-4 text-center">Todo un Mundo a explorar</h2>
                            <p class="text-center">Disfruta de una experiencia extraordinaria a través de un recorrido guiado, donde podrás conocer especies marinas chilenas, del río amazonas y de los arrecifes tropicales. </p>
                            
                            <p class="pt-5">
                                <span class="fw-bold">Fecha:</span> 28 agosto <br><br>
                                <span class="fw-bold">Lugar:</span> Frontis Acuario Valparaíso <br><br>
                                <span class="fw-bold">Entrada General:</span> $6.000 <br><br>
                                <span class="fw-bold">Promoción</span> Pagando con tus tarjetas Bci, 25% de descuento. <br><br>
                            </p>
                            
                            <p class="color_celeste  pt-5 text-center text-lg-start">Para más información</p>
                            <div class=" Rsociales_modal pt-3 text-center text-lg-start">
                                <a href="https://www.facebook.com/acuariovalparaiso" target="_blank"><div class="d-inline-block me-3"><i class="fab fa-facebook-f"></i></div></a>
                                <a href="https://instagram.com/acuariovalparaiso" target="_blank"><div class="d-inline-block mx-3"><i class="fab fa-instagram"></i></div></a>
                                <a href="https://www.youtube.com/channel/UC82DWEzHkS5_zgByGCVoIkg" target="_blank"><div class="d-inline-block ms-3 "><i class="fab fa-youtube"></i></div></a>
                            </div>
                        </div>
                    </div>
                </div>
</div>  
            
<!--MODAL 4-->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content marg_content_top marg_content_bottom">
                        <div class="modal-header p-0 m-0">
                            <img src="img/img_modal_1.jpg" class="img-fluid" alt="">
                            <div class="cruz_modal">
                                <img src="img/cruz.svg" height="15" alt="Cruz cerrar" data-bs-dismiss="modal" aria-label="Close">
                            </div>
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                        </div>
                        
                        <div class="modal-body px-3 px-lg-5 mt-4">
                            <h1 class="tit_modal  color_celeste text-center">Acuario Valparaíso</h1>
                            <h2 class="subtit_modal color_celeste pb-4 text-center">Todo un Mundo a explorar</h2>
                            <p class="text-center">Disfruta de una experiencia extraordinaria a través de un recorrido guiado, donde podrás conocer especies marinas chilenas, del río amazonas y de los arrecifes tropicales. </p>
                            
                            <p class="pt-5">
                                <span class="fw-bold">Fecha:</span> 28 agosto <br><br>
                                <span class="fw-bold">Lugar:</span> Frontis Acuario Valparaíso <br><br>
                                <span class="fw-bold">Entrada General:</span> $6.000 <br><br>
                                <span class="fw-bold">Promoción</span> Pagando con tus tarjetas Bci, 25% de descuento. <br><br>
                            </p>
                            
                            <p class="color_celeste  pt-5 text-center text-lg-start">Para más información</p>
                            <div class=" Rsociales_modal pt-3 text-center text-lg-start">
                                <a href="https://www.facebook.com/acuariovalparaiso" target="_blank"><div class="d-inline-block me-3"><i class="fab fa-facebook-f"></i></div></a>
                                <a href="https://instagram.com/acuariovalparaiso" target="_blank"><div class="d-inline-block mx-3"><i class="fab fa-instagram"></i></div></a>
                                <a href="https://www.youtube.com/channel/UC82DWEzHkS5_zgByGCVoIkg" target="_blank"><div class="d-inline-block ms-3 "><i class="fab fa-youtube"></i></div></a>
                            </div>
                        </div>
                    </div>
                </div>
</div>