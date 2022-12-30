<?php

namespace App\Http\Livewire\Site\Slides;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Inicio\Slide;

class EliminarSlideComponent extends Component
{
    public $open = false;
    public $slide;

    public function mount(Slide $slide)
    {
        $this->slide = $slide;
    }

    public function render()
    {
        return view('livewire.site.slides.eliminar-slide-component');
    }

    public function deleteSlide()
    {
        Storage::delete(['public/'.$this->slide->imagen]);
        $this->slide->delete();

        $this->reset(['open']);
        $this->emit('renderSlides');

        $this->emit('alert', 'slide eliminado con éxito!!');
    }
}
