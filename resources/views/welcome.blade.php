<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIGA-Sistema Integral de Gestión de Alumnos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">
                                <button class="btn btn-outline-info">PANEL SIGA</button>
                                
                            </a>
                        @else
                                
                                <button class="btn btn-primary">
                                    <a href="{{ route('login') }}" class="text-white">Iniciar Sesion </a>
                                </button>
                               

                            @if (Route::has('register'))
                                    <button class="btn btn-dark">
                                        <a href="{{ route('register') }}" class="text-white">Registrarse</a>
                                    </button>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                <h1 class="text-center text-primary" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Sistema Integral de Gestión de Alumnos</h1>

                <h2 class="text-center text-primary" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">(SIGA)</h2>
                 {{--    <x-jet-authentication-card-logo /> --}}

                 <div class="text-center mb-4">
                    <a href="{{url('/')}}">
                         <img src="{{url('storage/img/logo-removebg.png')}}" alt="" srcset="" width="200" height="180" >
                     </a>
                </div>
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="{{url('storage/documentacion/MANUAL.pdf')}}" target="blank" class="h5 font-weight-bolder text-dark"> Documentación</a>
                                        </div>
                                        <p class="text-muted small">
                                            Aquí puede visualizar la documentación del sistema “SIGA”, la cual le permitirá conocer el funcionamiento básico de este sistema escolar diseñado para los procesos administrativos que involucran alumnos. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="" class="h5 font-weight-bolder text-dark"> Tutoriales</a>
                                        </div>
                                        <p class="text-muted small">
                                            Ver tutoriales en YouTube acerca de la implementación del sistema en su entorno escolar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="card-body border-right p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                    </div>
                                    <div class="pl-3 text-sm">
                                        <div class="mb-2">
                                            <a href="https://wa.me/543855307491" target="blank" class="h5 font-weight-bolder text-dark">Soporte del Sistema</a>
                                        </div>
                                        <p class="text-muted small">
                                            Comuníquese con el desarrollador para darle mantenimiento y actualizaciones a su sistema “SIGA”.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       


                    <div class="text-sm text-muted">
                       Desarrollado en Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
