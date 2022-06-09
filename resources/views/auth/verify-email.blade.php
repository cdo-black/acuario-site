<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('img/_AcuarioValparaiso_og.jpg') }}" width="140px" alt="" style="border-radius: 40%;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Gracias por registrarte! Antes de comenzar, ¿podría verificar su correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                Se ha enviado un nuevo enlace de verificación a su correo electrónico que proporcionó durante el registro.
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        Reenviar correo de verificación
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
