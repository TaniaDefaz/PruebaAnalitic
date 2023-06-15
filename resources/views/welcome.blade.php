<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        <style>
            .auth-links {
             text-align: right;
             padding-top: 1cm;
            
             margin left: 3cm;
           }

            body {
                font-family: 'Nunito', sans-serif;
            }

            body {
            font-family: Arial, sans-serif;
            background-color: #E3D7F4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #E3D7F4;
            text-align: center;
            padding: 30px;
        }

        .logo {
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background-color: #8D2BB1;
            display: inline-block;
            float: left; /* Alinea la imagen a la izquierda */
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            flex: 1;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            line-height: 1.5;
        }

        .section {
            margin-bottom: 40px;
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .section-content {
            color: #666;
            line-height: 1.5;
        }

        .contact-info {
            
            margin-top: 40px;
            text-align: left;
        }

        .contact-info-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-info-content {
            color: #666;
            line-height: 1.5;
        }

        hr {
            margin-top: 0; /* Ajusta el margen superior para eliminar el espacio adicional */
            border: none;
            border-top: 1px solid #333;
        }

        .contact-subtitle {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-details {
            color: #666;
            line-height: 1.5;
        }

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block auth-links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           

        </div>
        <div class="header">
            <div class="logo">
                <img src="{{ asset('imagenes/simbolos-de-feminismo.jpg') }}" alt="Logo">
            </div>
            <h1>Analytic Women</h1>
        </div>
 
        <div class="container">
            <div class="section">
                <h2 class="section-title">Visión</h2>
                <div class="section-content">
                    <div class="square">
                        <p>Aquí va la descripción de la visión.</p>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2 class="section-title">Misión</h2>
                <div class="section-content">
                    <div class="square">
                        <p>Aquí va la descripción de la misión.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <hr>
    
        <div class="contact-info">
            <hr> <!-- Línea que abarca de extremo a extremo -->
            <img src="{{ asset('imagenes/Imagen1.jpeg') }}" alt="Imagen de contacto" style="width: 50px; height: 50px;">
            <a href="{{ url('/contactos') }}">Contactos</a>
            
            <div class="contact-subtitle"></div>
            <div class="contact-details"></div>
        </div>
    
    </body>
</html>