<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
		<meta name="robots" content="index, follow" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="ASD Informáticos - Adrián Ríos Sánchez" />
		<meta name="Description" content="El primer Acuario interactivo de Valparaíso, donde podrás encontrar variados tipos de especies marinas del Océano Pacífico. Ven a conocernos."/>
        
        <title>Acuario Valparaíso | Admin</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
