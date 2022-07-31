<?php

namespace App\Models\Admin\Inicio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slides';

    protected $fillable = [
        'estado',
        'posicion',
        'pretitulo',
        'titulo',
        'subtitulo',
        'parrafo',
        'imagen',
    ];

}
