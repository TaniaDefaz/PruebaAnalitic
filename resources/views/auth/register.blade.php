<div style="position: absolute; top: 100px; left:80px;">
    <x-guest-layout>
        <div class="x-jet-authentication-card" style="text-align: center;">
            <x-slot name="logo">
                <!-- Aquí puedes agregar el contenido de tu logo si lo deseas -->
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                <!-- Contenido del formulario -->
                <a href="{{ url('/cliente') }}">Registrar Cliente</a>
            </form>
            <div style="text-align: center;">
                <img src="{{ asset('imagenes/simbolos-de-feminismo.jpg') }}" alt="Logo" style="width: 300px; height: 300px;">
            </div>

            
        </div>
    </x-guest-layout>
</div>



<div style="position: absolute; top: 100; left: 600;">
    <x-guest-layout>
        <div class="x-jet-authentication-card" style="text-align: center;">
            <x-slot name="logo">
                <!-- Aquí puedes agregar el contenido de tu logo si lo deseas -->
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                <!-- Contenido del formulario -->
                <a href="{{ url('/empresa') }}">Registrar empresa</a>
            </form>
            <div style="text-align: center;">
                <img src="{{ asset('imagenes/simbolos-de-feminismo.jpg') }}" alt="Logo" style="width: 300px; height: 300px;">
            </div>

            
        </div>
    </x-guest-layout>
</div>



<div style="position: absolute; top: 100; left: 1100;">
    <x-guest-layout>
        <div class="x-jet-authentication-card" style="text-align: center;">
            <x-slot name="logo">
                <!-- Aquí puedes agregar el contenido de tu logo si lo deseas -->
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                <!-- Contenido del formulario -->
                <a href="{{ url('/aliado') }}">Registrar Aliado</a>
            </form>
            <div style="text-align: center;">
                <img src="{{ asset('imagenes/simbolos-de-feminismo.jpg') }}" alt="Logo" style="width: 300px; height: 300px;">
            </div>

            
        </div>
    </x-guest-layout>
</div>







