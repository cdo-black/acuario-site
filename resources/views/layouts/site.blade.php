<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Acuario Valparaíso | Un Mundo a Explorar</title>
		
		<meta name="author" content="ASD Informáticos - Adrián Ríos Sánchez" />
		<meta name="Description" content="El primer Acuario interactivo de Valparaíso, donde podrás encontrar variados tipos de especies marinas del Océano Pacífico. Ven a conocernos."/>
		<meta name="keywords" content="" />
		<meta name="robots" content="index, follow" /> 
		<meta content="Acuario Valparaíso - Un Mundo a Explorar" property="og:title"/>
		<meta content="{{ asset('img/_AcuarioValparaiso_og.jpg') }}" property="og:image"/>
		<meta content="El primer Acuario interactivo de Valparaíso, donde podrás encontrar variados tipos de especies marinas del Océano Pacífico. Ven a conocernos." property="og:description"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
		
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/Sitio_Acuario.css') }}" rel="stylesheet">
		<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Nunito:wght@300;600;700&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
		<script src="{{ asset('js/fontawesome.js') }}"></script>
		@livewireStyles

	</head>
  	<body>

        <header class="@yield('header')">

            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="{{ asset('img/logo_acuario_horizontal.svg') }}" height="40" alt="Logo Acuario valparaíso" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icono"></div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                    <ul class="navbar-nav text-end nav-pills bot">
						<li><a href="{{ route('welcome') }}" class="@yield('index') bot">INICIO</a></li>
						<li><a href="{{ route('nosotros') }}" class="@yield('about') bot">NOSOTROS</a></li>
						<li><a href="{{ route('colegios') }}" class="@yield('works') bot">COLEGIOS</a></li>
						<li><a href="{{ route('contacto') }}" class="@yield('contact') bot">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>

			@yield('slide')
			
        </header>
        
        @yield('content')
      
		@include('layouts.component.footer')

		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>
		@livewireScripts
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
  	</body>
</html>