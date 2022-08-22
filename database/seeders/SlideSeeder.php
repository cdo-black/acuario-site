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
        Slide::insert([
            'estado' => 'Borrador',
            'posicion' => 'inactive',
            'pretitulo' => 'atención',
            'titulo' => '¿VACACIONES DE INVIERNO?',
            'subtitulo' => '¡SÍ, NO TE LO PUEDES PERDER!',
            'parrafo' => 'Tenemos el mejor panorama para estas vacaciones de invierno, ven a disfrutar de la fauna marina Chilena y del mundo, fósiles reales de hace millones de años y muchas otras novedades.',
            'imagen' => 'img/animal5.png',
        ]);

        Slide::insert([
            'estado' => 'Publico',
            'titulo' => 'Amazonas',
            'subtitulo' => 'El rio más caudaloso del mundo',
            'parrafo' => '6.500 litros de agua dulce en nuestro acuario, Ven a conocer el acuario Amazónico y asombrate con los diferentes peces que tenemos.',
            'imagen' => 'img/animal2.png',
        ]);

        Slide::insert([
            'estado' => 'Publico',
            'pretitulo' => 'Nuevo',
            'titulo' => 'Descubre Fósiles',
            'subtitulo' => 'Sala de la evolución',
            'parrafo' => 'Prepárate para conocer uno de los descubrimientos más asombrosos del planeta, los Fósiles prehistóricos reales de Chile y el mundo.',
            'imagen' => 'img/animal4.png',
        ]);

        Slide::insert([
            'estado' => 'Borrador',
            'posicion' => 'active',
            'pretitulo' => 'Concurso',
            'titulo' => 'Celebramos el',
            'subtitulo' => 'día del niño',
            'parrafo' => 'Porque deseamos que este día sea especial para ti, queremos que nos visites y que disfrutemos juntos la maravillosa vida acuática de nuestros animales marinos.',
            'imagen' => 'img/animal6.png',
        ]);

        Slide::insert([
            'estado' => 'Publico',
            'posicion' => 'active',
            'pretitulo' => 'atención',
            'titulo' => 'Abierto al Público',
            'subtitulo' => 'Lunes 15 de agosto',
            'parrafo' => '¿Fin de semana Largo? Estaremos atendiendo de manera normal, Para que puedas disfrutar de un día agradable, conociendo nuestra fauna marina y aprendiendo de todas las maravillas acuáticas.',
            'imagen' => 'img/animal6.png',
        ]);
    }
}
