<?php

namespace App\Http\Livewire\Site\Slides;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin\Inicio\Slide;

class CrearSlideComponent extends Component
{
    use WithFileUploads;

    public $openModal = false;
    public $estado, $posicion, $pretitulo, $titulo, $subtitulo, $parrafo, $imagen;

    protected $rules = [
        'pretitulo' => 'max:20',
        'titulo' => 'required|max:30',
        'subtitulo' => 'max:40',
        'parrafo' => 'required|max:300',
        'imagen' => 'required|image|max:2048', // 2MB Max
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function render()
    {
        return view('livewire.site.slides.crear-slide-component');
    }
 
    public function saveSlide()
    {
        $this->validate();
 
        $imagen = $this->imagen->storePublicly('slides', 'public');

        Slide::create([
            'pretitulo' => $this->pretitulo,
            'titulo' => $this->titulo,
            'subtitulo' => $this->subtitulo,
            'parrafo' => $this->parrafo,
            'imagen' => $imagen,
        ]);

        $this->reset(['openModal', 'pretitulo', 'titulo', 'subtitulo', 'parrafo', 'imagen']);
        $this->emit('renderSlides');

        $this->emit('alert', 'Slide creado con éxito!!');

    }
}
