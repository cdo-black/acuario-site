<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Inicio\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Atención',
            'titulo' => 'Bienvenido Verano',
            'subtitulo' => '¡Nuevo horario!',
            'parrafo' => '¡Damos la bienvenida a las vacaciones de Verano!, ven a visitarnos en nuestro nuevo horario, todos los días de 10:00 a 19:30 hrs. </br> 
                            Asómbrate con toda la naturaleza acuática, con fósiles reales y un montón de enseñanzas y conocimientos del mundo acuático.',
            'imagen' => 'img/animal21.png',
        ]);

        Slide::create([
            'estado' => 'Publico',
            'posicion' => 'active',
            'pretitulo' => 'Atención',
            'titulo' => 'este fin de semana',
            'subtitulo' => '¡Felices Fiestas!',
            'parrafo' => 'Este sábado 31 de diciembre, por motivos de fiestas de fin de año cerraremos a las 14:30 hrs. </br>
                            El 01 de enero, mantendremos cerrado todo el día.',
            'imagen' => 'img/animal20.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Atención',
            'titulo' => 'Estaremos Cerrados',
            'subtitulo' => 'Este 24 y 25 de Diciembre',
            'parrafo' => 'Amigos Queremos anunciarles que este 24 y 25 de Diciembre nuestro Acuario se mantendrá cerrado por motivos de Fiesta Navideña. Esperamos poder verlos en otra ocasión.',
            'imagen' => 'img/animal19.png',
        ]);

        Slide::create([
            'estado' => 'Publico',
            'pretitulo' => 'Descuentos',
            'titulo' => 'Una gran oportunidad',
            'subtitulo' => '25% dcto. en tu entrada',
            'parrafo' => 'Disfruta de esta promoción para que puedas venir con toda tu familia, obtén un 25% de descuento en tu entrada pagando con tus tarjetas banco BCI y programa el mejor panorama con nosotros.',
            'imagen' => 'img/animal18.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Atención',
            'titulo' => '08 de Diciembre',
            'subtitulo' => 'Ven a visitarnos',
            'parrafo' => 'Este Jueves 08 de Dic. estaremos atendiendo desde las 10:00 hasta las 19:00 hrs. para que puedas disfrutar de un día con 
            un panorama diferente, divertido y de gran enseñanza sobre el mundo acuario de Chile y el mundo.',
            'imagen' => 'img/animal17.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Concurso',
            'titulo' => '¿Existen Tiburones en Chile?',
            'subtitulo' => 'Participa junto a nosotros',
            'parrafo' => 'Responde la pregunta y estarás participando por 4 entradas para que vengas con quien quieras. Búscanos en Redes Sociales y participa.',
            'imagen' => 'img/animal16.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Descuento',
            'titulo' => 'Diversión en Familia',
            'subtitulo' => '25% de descuento en tu entrada',
            'parrafo' => 'Ven a pasarlo genial junto a tu familia, descuento válido a partir de 4 integrantes, 
                            sólo los días lunes, martes y miércoles desde el 14 al 30 de noviembre, 
                            Aplicable con cualquier medio de pago, no acumulable con otras promociones.',
            'imagen' => 'img/animal15.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Descuento',
            'titulo' => '¡Atención Universitario!',
            'subtitulo' => '50% de descuento en tu entrada',
            'parrafo' => 'No dejes pasar esta oportunidad y ven a visitarnos, descuento aplicable solo los días lunes, 
                            martes y miércoles desde el 14 al 30 de noviembre, Aplicable con cualquier medio de pago, 
                            no acumulable con otras promociones.',
            'imagen' => 'img/animal14.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'titulo' => 'Ven con tu Colegio',
            'subtitulo' => 'Disfruta estos últimos días con tu curso',
            'parrafo' => 'No esperes más! Ven a aprender y disfrutar junto a tu curso, 
                            jardín infantil o colegio y aprovecha estos últimos días de colegiatura 
                            junto a todo el mundo acuático que te ofrece Acuario Valparaíso.',
            'imagen' => 'img/animal13.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Descuentos',
            'titulo' => 'El Mejor Panorama!',
            'subtitulo' => 'Celebra con nosotros la fiesta Halloween',
            'parrafo' => 'Tenemos un 25% de dcto. en tu entrada, este 31 de oct. y 01 de nov. Ven y asómbrate con nuestra Fauna Marina. <br>
                            *Dcto. válido solo para niños hasta los 12 años. <br>
                            *No acumulable con otras promociones. <br>
                            *Estaremos atendiendo todos los días.',
            'imagen' => 'img/animal12.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Destacado',
            'titulo' => 'Pez Payaso',
            'subtitulo' => '¡Ven a Conocerlo!',
            'parrafo' => 'Más conocido como Nemo (Película Buscando a Nemo) un pez de colores fuertes y muy dinámico. Lo tenemos acá, en Acuario Valparaíso.',
            'imagen' => 'img/animal11.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Atención',
            'titulo' => 'Visitanos',
            'subtitulo' => 'Éste fin de semana largo 8-9-10 de Octubre',
            'parrafo' => 'En este fin de semana largo si viajas a la costa no olvides pasar a visitarnos, estaremos atendiendo normalmente para que puedas disfrutar de esta gran experiencia marina.',
            'imagen' => 'img/animal10.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'pretitulo' => 'Atención',
            'titulo' => 'Relájate',
            'subtitulo' => '¡tenemos una gran noticia!',
            'parrafo' => 'Desde hoy nos puedes visitar sin mascarilla y sin pase de movilidad, para seguir compartiendo juntos de nuestra Fauna Marina',
            'imagen' => 'img/animal9.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Fiestas Patrias',
            'titulo' => 'Seguimos con nuestra chilenidad',
            'subtitulo' => 'Abierto 17, 18 y 19 de Septiembre',
            'parrafo' => '',
            'imagen' => 'img/animal8.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'inactive',
            'pretitulo' => 'descuentos',
            'titulo' => 'En Fiestas Patrias, Visítanos',
            'subtitulo' => '¡Ven con toda tu familia!',
            'parrafo' => 'Tenemos descuentos exclusivos para tí, revisa más información en nuestras Redes Sociales, síguenos y comenta. Te Esperamos!',
            'imagen' => 'img/animal7.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Concurso',
            'titulo' => 'Celebramos el',
            'subtitulo' => 'día del niño',
            'parrafo' => 'Porque deseamos que este día sea especial para ti, queremos que nos visites y que disfrutemos juntos la maravillosa vida acuática de nuestros animales marinos.',
            'imagen' => 'img/animal6.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'atención',
            'titulo' => 'Abierto al Público',
            'subtitulo' => 'Lunes 15 de agosto',
            'parrafo' => '¿Fin de semana Largo? Estaremos atendiendo de manera normal, Para que puedas disfrutar de un día agradable, conociendo nuestra fauna marina y aprendiendo de todas las maravillas acuáticas.',
            'imagen' => 'img/animal6.png',
        ]);
        
        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'inactive',
            'pretitulo' => 'atención',
            'titulo' => '¿VACACIONES DE INVIERNO?',
            'subtitulo' => '¡SÍ, NO TE LO PUEDES PERDER!',
            'parrafo' => 'Tenemos el mejor panorama para estas vacaciones de invierno, ven a disfrutar de la fauna marina Chilena y del mundo, fósiles reales de hace millones de años y muchas otras novedades.',
            'imagen' => 'img/animal5.png',
        ]);

        Slide::create([
            'estado' => 'Publico',
            'titulo' => 'Descubre Fósiles',
            'subtitulo' => 'Sala de la evolución',
            'parrafo' => 'Prepárate para conocer uno de los descubrimientos más asombrosos del planeta, los Fósiles prehistóricos reales de Chile y el mundo.',
            'imagen' => 'img/animal4.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'cerrado',
            'titulo' => 'por plebicito de salida',
            'parrafo' => 'Acuario de Valparaiso se mantendrá cerrado el día Domingo 04 Septiembre',
            'imagen' => 'img/animal3.png',
        ]);

        Slide::create([
            'estado' => 'Borrador',
            'titulo' => 'Amazonas',
            'subtitulo' => 'El rio más caudaloso del mundo',
            'parrafo' => '6.500 litros de agua dulce en nuestro acuario, Ven a conocer el acuario Amazónico y asombrate con los diferentes peces que tenemos.',
            'imagen' => 'img/animal2.png',
        ]);

        Slide::create([
            'estado' => 'Publico',
            'titulo' => 'Acuario de Valparaíso',
            'subtitulo' => 'Todo un mundo a explorar',
            'parrafo' => 'Disfruta de una experiencia extraordinaria a través de un recorrido guiado, donde podrás conocer especies marinas Chilenas, del río Amazonas y de los arrecifes tropicales.',
            'imagen' => 'img/animal1.png',
        ]);
    }
}