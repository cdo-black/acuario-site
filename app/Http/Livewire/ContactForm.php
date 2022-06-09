<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Mail\SendContactForm;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    use LivewireAlert;
    
    public $nombre, $apellido, $telefono, $correo, $mensaje;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function sendMessage()
    {
        $this->validate(
            [ 'nombre'=>'required', 'apellido'=>'required', 'telefono'=>'required', 'correo'=>'required|email', 'mensaje'=>'required|min:10'],            
            [
                'nombre.required'   => 'ingrese su nombre',
                'apellido.required' => 'ingrese su apellido',
                'telefono.required' => 'se necesita un teléfono para contactarlo',
                'correo.required'   => 'se necesita un correo para contactarlo',
                'mensaje.required'  => 'ingrese su mensaje',
                'mensaje.min'       => 'mínimo 10 carácteres',
            ]
        );

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new SendContactForm($this->nombre,$this->apellido,$this->telefono,$this->correo,$this->mensaje));
        $this->default();
        $this->alert('success', 'Mensaje enviado con éxito!', [
            'position' =>  'center', 
            'timer' =>  3000,  
            'toast' =>  false,
        ]);
    }

    public function default()
    {
        $this->nombre = '';
        $this->apellido = '';
        $this->telefono = '';
        $this->correo = '';
        $this->mensaje = '';

    }
}
