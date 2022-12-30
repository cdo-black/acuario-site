<?php

namespace App\Http\Livewire\Site\Slides;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Inicio\Slide;

class ListaSlidesComponent extends Component
{
    use WithPagination;

    public $search = '';
    public $sortBy = '';
    public $sortDirection = 'desc';

    protected $listeners = ['renderSlides'=>'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortBy === $field
            ? $this->reverseSort()
            : 'asc';
 
        $this->sortBy = $field;
    }
 
    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
            ? 'desc'
            : 'asc';
    }
    

    public function render()
    {
        $slides = Slide::search('subtitulo', $this->search)->orderBy($this->sortBy, $this->sortDirection)->paginate(10);

        return view('livewire.site.slides.lista-slides-component', compact('slides'));
    }
}
