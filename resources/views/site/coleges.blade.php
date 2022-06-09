@extends('layouts.site')
@section('works', 'active')

@section('slide')
<section class="container-fluid bg_top_colegios  d-flex align-items-center justify-content-end">
    <div class="row p-4 justify-content-end align-items-center">
        <article class="col-12 col-lg-9 box_top_gral text-center color_celeste me-0 me-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1 class="tit_general">“El océano agita el corazón, inspira la imaginación y trae alegría eterna al alma”</h1>
            <img src="img/box_peces_top.svg" class="pt-4 box_peces" alt="Ícono de Peces">
        </article>
    </div>
</section>
@endsection

@section('content')
<section class="container padd_content_top">
    <div class="row justify-content-center m-0 m-lg-1">
        <article class="col-12 col-md-6 text-center color_celeste border_general mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h1 class="tit_general pb-3">Colegios</h1>
            <p>Nuestra prioridad es informar y enseñar sobre la diversidad de especies marinas, sus cuidados y vida de estas, y es importante poder trasmitir eso como un objetivo para nuestros estudiantes. <br>
                Realizamos los recorridos guiados por un especialista en las ciencias del mar, quien relata por 30 minutos lo que los estudiantes observan en el Acuario, entregando información del hábitat, alimentación, reproducción y muchas más cosas de las especies. </p>
        </article>
    </div>
</section>
       
<article class="container-fluid bg_blanco padd_content_bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 galeria wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                <a class="img_1"></a>
                <a class="img_2"> </a>
                <a class="img_3"></a>
                <a class="img_4"></a>
                <a class="img_5"></a>
                <a class="img_6"></a>
            </div>
        </div>
    </div>
</article>
      
<section class="container padd_content_bottom">
    <div class="row justify-content-evenly m-0 m-lg-1">
        <article class="col-12 col-lg-3 text-center border_general color_celeste mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1 class="tit_general pb-3">Metodología de enseñanza</h1>
            <p>Nuestros recorridos son adaptados para el curso que nos visita, recibimos estudiantes desde la educación infantil, básica, media, hasta estudiantes universitarios.  Enfocados en el curriculum Nacional de Ciencias.</p>
        </article>

        <article class="col-12 col-lg-3 text-center border_general color_celeste mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h1 class="tit_general pb-3">Material de Apoyo complementario</h1>
            <p>Para potenciar aún más la educación de cada alumno, enviaremos una guía de material de apoyo complementario a tu visita pedagógica con preguntas para realizar en el salón de clases, posterior a la visita de nuestro acuario. </p>
        </article>

        <article class="col-12 col-lg-3 text-center border_general color_celeste mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
            <h1 class="tit_general pb-3">Reservas Educacionales 2022</h1>
            <p>Estudiante $2.500 <br>
                Adultos $3.500 <br>
                Horario: 09:00 a 17:30 hrs.
            </p>
        </article>
                
        <article class="col-12 col-lg-6 text-center border_general color_celeste mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
            <h1 class="tit_general pb-3">Recorrido de cursos</h1>
            <p>Disfruta de nuestros recorridos guiados <br><br>
            - Capacidad para 10 alumnos más la compañía de un profesor, educador o adulto responsable. <br>
            - El recorrido abarca 3 pisos, acceso solo por escaleras. <br>
            - Duración 30 minutos. <br>
            - Los grupos ingresan al recinto cada 15 minutos (se mantiene un grupo por piso, para mantener el aforo). <br>
            - Los recorridos deben ser reservados, por vía mail o teléfono. <br>
            - Contamos con Protocolo COVID-19. <br><br>
            <span class="fw-bold">Para mayor información: <br>
            <span class="mail_colegio">educacion@acuariovalparaiso.cl</span><br>
            +569 76039703</span>
            </p>
        </article>
    </div>
</section>
        
<section class="container">
    <div class="row">
        <h1 class="tit_general color_celeste pb-5">Equipo</h1>
        <article class="col-12 col-md-4 col-lg-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="img/equipo1_Pedro.jpg" class="img_equipo" alt="imagen equipo">
            <h2 class="nombre_equipo pt-4">Pedro <br>Mohana</h2>
            <p class="color_celeste pb-5">Gerente General Acuario</p>
        </article>

        <article class="col-12 col-md-4 col-lg-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <img src="img/equipo2_Romina.jpg" class="img_equipo" alt="imagen equipo">
            <h2 class="nombre_equipo pt-4">Romina <br>Basaes</h2>
            <p class="color_celeste pb-5">Administradora Acuario</p>
        </article>

        <article class="col-12 col-md-4 col-lg-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
            <img src="img/equipo3_Yelika.jpg" class="img_equipo" alt="imagen equipo">
            <h2 class="nombre_equipo pt-4">Yelika <br>Henríquez</h2>
            <p class="color_celeste pb-5">Área Eduación Acuario</p>
        </article>
    </div>
</section>
  
<div class="container-fluid bg_sponsors"></div>
@endsection