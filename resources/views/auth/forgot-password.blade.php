<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
          {{--   <x-jet-authentication-card-logo /> --}}
          <div class="text-center mb-4">
            <a href="{{url('/')}}">
                 <img src="{{url('storage/img/logo-removebg.png')}}" alt="" srcset="" width="200" height="180" >
             </a>
        </div>
        
        </x-slot>

        <div class="card-body">

            <div class="mb-3">
                {{ __('
                ¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf

                <div class="mb-3">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button>
                        {{ __('Correo electrónico Enlace de restablecimiento de contraseña
                        ') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>