@extends('layouts.site')
@section('index', 'active')
@section('header', 'container-fluid bg_inicio  p-0 position-relative')

@section('slide')
@include('layouts.component.slide')
@endsection

@section('content')
<!-- <section class="container pb-5 padd_small_top">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7 wow fadeInUp" data-wow-duration="1s"  data-wow-delay="0.5s">
            <div class="ratio ratio-16x9 border_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Dy1XhJG9lro?start=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section> -->

<section class="container-fluid padd_small_top mt-5">
          <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s" >
              <article class="col-12 col-lg-6 col-xl-5 p-0 border_info_top">
                  <img src="img/img_info.jpg" class="img_info" alt="">
              </article>
              
              <article class="col-12 col-lg-6 col-xl-5 color_celeste border_info_bottom  pb-5 text-center text-lg-start">
                   <h1 class="tit_general text-center pb-3">Información importante que debes conocer</h1>
                    <p >
                        - Ingreso por orden de llegada, con cantidad limitada.<br>
                        - Solo se puede visitar el Acuario a través de un recorrido guiado de 30 minutos.<br>
                        - Las entradas se adquieren en caja principal el mismo día de tu visita.<br>
                        - Te invitamos a seguir nuestras redes sociales donde podrás encontrar información actualizada de horario de ingreso para publico general en el caso que existan visitas de establecimientos educacionales.<br>
                        - Solo existe acceso por escaleras.<br>

                    </p>
              </article>
          </div>
</section>
    
<section class="container padd_small_top marg_content_bottom">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 wow fadeInUp" data-wow-duration="1s"  data-wow-delay="0.5s">
            <div class="ratio ratio-16x9 border_video">
                <iframe src="https://www.youtube.com/embed/3I5zCJJmCVw?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
      
<section class="container">
    <div class="row justify-content-center m-0">
        <article class="col-12 col-md-4 col-lg-3 color_celeste text-center border_general mx-3 my-3 wow fadeInUp" data-wow-duration="1.5s"  data-wow-delay="0.5s">
            <h1 class="tit_general pb-2">Horarios</h1>
            {{-- <p>
                Todos los días <br>
                10:00 a 19:00 hrs.
            </p> --}}
            <p>
                Lunes a Viernes <span class="break"></span>
                09:00 a 18:00 hrs.
            </p>
            <p>
                Sábado, Domingo y Festivos <br>
                10:00 a 19:00 hrs.
            </p>
        </article>

        <article class="col-12 col-md-4 col-lg-3 color_celeste text-center border_general mx-3 my-3 wow fadeInUp" data-wow-duration="1s"  data-wow-delay="1s">
            <h1 class="tit_general pb-2">Valores</h1>
            <p>
                Público General
                $4.900
            </p>
            <p>
                Niños de 2 a 12 años. 
                $3.900
            </p>
            <p>
                Adulto mayor sobre los 60 años.
                $3.900
            </p>
            <p>
                Colegios previa reserva
                $2.500
            </p>
        </article>

        <article class="col-12 col-md-4 col-lg-3 color_celeste text-center border_general mx-3 my-3 wow fadeInUp" data-wow-duration="1s"  data-wow-delay="1.5s">
            <img src="img/25dcto.svg" height="120" class="mb-4" alt="25% de descuento">
            <p>
                Obtén un 25% de descuento en tu entrada pagando con cualquiera de tus tarjeta BCI
            </p>
        </article>
    </div>
</section>
      
<main class="container-fluid padd_content_top padd_content_bottom wow fadeInUp" data-wow-duration="1s"  data-wow-delay="1.5s">
    <div class="row justify-content-evenly">
        <article class="col-12 col-md-6 col-lg-3 col-xl-2 text-center pb-5 px-2 px-md-5 px-lg-2">
            <img src="img/ico_1.svg" height="50" alt="ícono Aprende con Notros">
            <h1 class="tit_general pt-4">Aprende con <br>nosotros</h1>
            <p class="color_celeste"> Déjate maravillar con nuestros recorridos guiados donde podrás observar y conocer diferentes especies entre peces e invertebrados. Acuario Valparaiso tiene especial énfasis en educación, cuidado y protección de nuestro mar.</p>
        </article>

        <article class="col-12 col-md-6 col-lg-3 col-xl-2 text-center pb-5 px-2 px-md-5 px-lg-2">
            <img src="img/ico_2.svg" height="50" alt="ícono conoce especies">
            <h1 class="tit_general pt-4">Conoce <br>Especies</h1>
            <p class="color_celeste"> Conoce una gran variedad de especies presentes en la Costa Central de Chile, peces del Archipiélago de Juan Fernández, del Río Amazonas, como también habitantes de los arrecifes tropicales.</p>
        </article>

        <article class="col-12 col-md-6 col-lg-3 col-xl-2 text-center pb-5 px-2 px-md-5 px-lg-2">
            <img src="img/ico_3.svg" height="50" alt="ícono para toda la familia">
            <h1 class="tit_general pt-4">Para toda <br>la Familia</h1>
            <p class="color_celeste"> Queremos integrar a cada una de las personas que quiera conocernos, es por eso que Acuario Valparaíso abre sus puertas a toda la familia, nuestros recorridos están adaptados para todas las edades.</p>
        </article>

        <article class="col-12 col-md-6 col-lg-3 col-xl-2 text-center pb-5 px-2 px-md-5 px-lg-2">
            <img src="img/ico_4.svg" height="50" alt="ícono medio ambiente">
            <h1 class="tit_general pt-4">Medio <br>Ambiente</h1>
            <p class="color_celeste"> Es de suma importancia nuestro llamado a cuidar y proteger el medio ambiente, es por eso hacemos énfasis al tema y cuidamos nuestro océano, ¡únete a la causa!</p>
        </article>
    </div>
</main>
	
<article class="container-fluid bg_div_especies marg_content_bottom align-items-center d-flex">
    <div class="row p-4 justify-content-end align-items-center">
        <div class="col-12 col-lg-6 border_div_especies text-center color_celeste me-0 me-lg-5 wow fadeInRight" data-wow-duration="1s" dta-wow-delay="1.5s">
            <h1 class="tit_general">Diversidad de Especies</h1>
            <p class=" pt-4">Sin duda nuestros océanos están llenas de especies marinas y de agua dulce. Déjate sorprende por nuestras diversas especies desde la pequeña estrella de mar Chilena conocida como “Estrella Enana” hasta un gran pez gato conocido como “Bagre cola Roja”. 
            </p>
        </div>
    </div>
</article>
        
<section class="container-fluid bg_sponsors align-items-center d-flex">
    <div class="container">
        <div class="row">
            <article class="col-12 text-center text-md-start wow fadeInLeft" data-wow-duration="1s" >
                <h1 class="tit_general color_celeste pb-2">Sponsors</h1>
                <div class="me-0 me-md-5 my-3 d-block d-md-inline-block">
                    <img src="img/icon_PValparaiso.svg" height="40"  alt="ícono Puerto Valparaíso">
                </div>
                <div class="me-0 me-md-5 my-3 d-block d-md-inline-block">
                    <img src="img/icon_bci.svg" height="40" alt="ícono Banco Bci">
                </div>
            </article>
        </div>
    </div>
</section>
@endsection