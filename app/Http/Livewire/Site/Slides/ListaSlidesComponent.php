<?php

namespace App\Http\Livewire\Site\Slides;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Inicio\Slide;

class ListaSlidesComponent extends Component
{
    use WithPagination;

    public $search = '';
    public $slider;

    protected $listeners = ['renderSlides'=>'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $slides = Slide::search('subtitulo', $this->search)->orderBy('id', 'desc')->paginate(10);

        return view('livewire.site.slides.lista-slides-component', compact('slides'));
    }
 
    public function statusBorrador($id)
    {
        $slide_activo = Slide::where('posicion', 'active')->first();

        // dd($slide_activo);

        $slide_activo->update([
            'posicion' => 'inactive',
        ]);

        $slide = Slide::find($id);

        $slide->update([
            'estado' => 'Publico',
            'posicion' => 'active',
        ]);

        $this->emit('renderSlides');
        $this->emit('alert', 'Slide publicado con éxito!!');
    }
 
    public function statusPubicar($id)
    {
        $slide = Slide::find($id);

        $slide->update([
            'estado' => 'Borrador',
        ]);

        $this->emit('renderSlides');
        $this->emit('alert', 'Slide en borrador!!');
    }


}
