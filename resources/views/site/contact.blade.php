@extends('layouts.site')
@section('contact', 'active')

@section('slide')
<section class="container-fluid bg_top_contacto  d-flex align-items-center justify-content-end">
    <div class="row p-4 justify-content-end align-items-center">
        <article class="col-12 col-lg-9 box_top_gral text-center color_celeste me-0 me-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1 class="tit_general">“El océano es una imagen central, Es el simbolismo de un gran viaje”</h1>
            <img src="img/box_peces_top.svg" class="pt-4 box_peces" alt=" Ícono de Peces">
        </article>
    </div>
</section>
@endsection

@section('content')
<section id="Contacto" class="container padd_content_top ">
    <div class="row justify-content-center">
        <h1 class="tit_general text-center color_celeste pb-5">Contáctanos</h1>
        <div class="col-12 col-lg-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            @livewire('contact-form')
        </div>
    </div>
</section>
      
<section id="Mapa" class="container padd_content_top">
    <div class="row justify-content-evenly align-items-center m-0 m-lg-1">
        <div class="col-12 col-lg-7 px-0 order-2 order-lg-1 pt-5 pt-lg-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <iframe class="img_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.724659964573!2d-71.62953004819062!3d-33.037383783725794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e12cc4732c1f%3A0xe0ebd511d0847b82!2sMuelle%20Prat!5e0!3m2!1ses-419!2scl!4v1650496285206!5m2!1ses-419!2scl"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <article class="col-12 col-lg-4 color_celeste text-center border_general order-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h1 class="tit_general  pb-3">Encuéntranos</h1>
            <p class="m-0">Desde el Metro de Valparaíso, desciende en estación Puerto ubicada en el Mall Paseo del Puerto, luego dirígete a la salida de este y camina en dirección al mar, allí te encontrarás con el Muelle Prat. <br><br>
                Desde la Avenida Errázuriz, llega a la altura de Plaza Sotomayor, gira en dirección al mar hasta llegar al Muelle Prat.</p>
        </article>
    </div>
            
    <article class="d-inline-block pt-3 ps-0 ps-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
        <img src="img/ico_mapa.svg"  height="30" alt="Ícono mapa">
        <p class="color_celeste d-inline-block ps-2"> Muelle Prat s/n Valparaíso, Chile</p>
    </article>
</section>
       
<div class="container-fluid bg_sponsors"></div> 
@endsection