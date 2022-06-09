@component('mail::message')

Enviado por {{ $nombre }} {{ $apellido }}

## Formas de contactarme
### por correo : {{ $correo }}
### por teléfono : {{ $telefono }}

## Mensaje
### {{ $mensaje }}

@endcomponent