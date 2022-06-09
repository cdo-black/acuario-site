<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre, $apellido, $telefono, $correo, $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$apellido,$telefono,$correo,$mensaje)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->correo)
                    ->subject('Formulario de contacto sitio Acuario de Valparaíso')
                    ->markdown('emails.contact.form')
                    ->with([
                        'nombre'    => $this->nombre,
                        'apellido'  => $this->apellido,
                        'telefono'  => $this->telefono,
                        'correo'    => $this->correo,
                        'mensaje'   => $this->mensaje,
                    ]);
    }
}
