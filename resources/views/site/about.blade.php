@extends('layouts.site')
@section('about', 'active')

@section('slide')
<section class="container-fluid bg_top_nosotros  d-flex align-items-center justify-content-end">
    <div class="row p-4 justify-content-end align-items-center">
        <article class="col-12 col-lg-9 box_top_gral text-center color_celeste me-0 me-lg-5 wow fadeInRight" data-wow-duration="1s"  data-wow-delay="0s">
            <h1 class="tit_general">“El agua es la fuerza motriz de toda la naturaleza”</h1>
            <img src="img/box_peces_top.svg" class="pt-4 box_peces" alt="Ícono de Peces">
        </article>
    </div>
</section>
@endsection

@section('content')
<section class="container padd_content_top" >
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 text-center color_celeste px-2 px-lg-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1 class="tit_general pb-3">Nosotros</h1>
            <p>Somos un conjunto de personas y empresas que apoyamos las iniciativas relacionadas con la educación ambiental de nuestro Océano Pacífico.</p>
        </div>

        <div class="col-12 col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <img src="img/fachada_acuario.jpg" class="object" alt="Fachada Acuario Valparaíso">
        </div>
    </div>
</section>
          
<section class="container padd_content_bottom">
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 order-2 order-lg-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="img/img_vision.jpg" class="object" alt="Visión y Misión del Acuario">
        </div>

        <article class="col-12 col-lg-6 text-center color_celeste mt-5 border-1 px-2 px-lg-5 order-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h1 class="tit_general pb-3">Visión</h1>
            <p>Nuestro planeta está experimentando múltiples cambios negativos producto de la acción humana. Nuestra Visión es aportar desde la educación, para que generemos consciencia ambiental en todos las personas que nos visitan tanto física como digitalmente.</p>

            <h1 class="tit_general pb-3 pt-3" >Misión</h1>
            <p>El Acuario de Valparaíso tiene como misión llegar con un mensaje educativo a familias, estudiantes y turistas para que puedan conocer nuestro mar, sus ecosistemas y cuidarlo integralmente.</p>
        </article>
    </div>
</section>
    
<section class="container-fluid padd_content_bottom">
    <div class="row align-items-center justify-content-evenly m-0 m-lg-1">
        <div class="col-12 col-lg-7 order-2 order-lg-1 p-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="img/img_un_mundo.jpg" class="img_un_mundo" alt="Acuario vakparaíso, Un Mundo a Explorar">
        </div>

        <div class="col-12 col-lg-4 color_celeste mx-3  text-center border_general mb-5 mb-lg-0 order-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <h1 class="tit_general pb-3"ç>Un Mundo a Explorar</h1>
            <p>Nuestros Océanos son un mundo a explorar, un lugar donde podemos encontrar diversidad de peces, ecosistemas marinos y muchas otras cosas más. Sé parte de nuestros recorridos guiados y conoce de cerca todo un mundo marino que te sorprenderá.</p>
        </div>
    </div>
</section>  
      
<article class="container-fluid ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 text-center pb-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="img/ico_medioAmbiente.svg" class="ico_medioAmbiente" alt="ícono medio Ambiente">
            </div>

            <div class="col-12 col-lg-6  color_celeste text-center pb-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <h1 class="tit_general">Comprometidos con el medio ambiente</h1>
                <p>Nuestros recorridos guiados tienen especial énfasis en educación, cuidado y protección de nuestro mar. ¡Cuidemos nuestro océano¡ </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 pb-5 px-0 px-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                <img src="img/ecoteam_1.jpg" class="object" alt="">
            </div>

            <div class="col-12 col-lg-6 pb-5 px-0 px-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
                <img src="img/ecoteam_2.jpg" class="object" alt="">
            </div>
        </div>
    </div>
</article>

<div class="container-fluid bg_sponsors"></div>
@endsection

	

   



   