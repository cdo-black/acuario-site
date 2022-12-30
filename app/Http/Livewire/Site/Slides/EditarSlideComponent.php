<?php

namespace App\Http\Livewire\Site\Slides;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Inicio\Slide;

class EditarSlideComponent extends Component
{
    use WithFileUploads;

    public $open = false;
    public $slide;
    public $pretitulo, $titulo, $subtitulo, $parrafo, $imagen;

    protected function rules()
    {
        return [
            'slide.pretitulo' => 'max:20',
            'slide.titulo' => 'required|max:30',
            'slide.subtitulo' => 'max:40',
            'slide.parrafo' => 'required|max:300',
            // 'slide.imagen' => 'image|max:2048', // 2MB Max
        ];
    }

    public function mount(Slide $slide)
    {
        $this->slide = $slide;
    }

    public function render()
    {
        return view('livewire.site.slides.editar-slide-component');
    }

    public function updateSlide()
    {
        $validatedData = $this->validate();

        if ($this->imagen) {
            Storage::delete(['public/'.$this->slide->imagen]);

            $this->slide->imagen = $this->imagen->storePublicly('slides', 'public');
        }

        $this->slide->update($validatedData);

        $this->reset(['open', 'imagen']);
        $this->emit('renderSlides');

        $this->emit('alert', 'slide actualizado con éxito!!');
    }
}
