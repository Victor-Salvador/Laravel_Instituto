<x-layouts.layout>
    @guest
        <div class="hero h-full"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Aprendiendo Laravel</h1>
                    <p class="mb-5">
                        Aplicación para aprender Laravel
                    </p>
                    <hr>
                    <a href="register" class="cursor-pointer hover:text-blue-300">
                        <p>Registrate para acceder a las opciones</p>
                    </a>
                    <a href="login">
                        <button class="btn btn-primary mt-5">Login</button>
                    </a>

                </div>
            </div>
        </div>
    @endguest
    @auth
        <div class="flex flex-wrap gap-4 p-5 justify-center">
            <div class="card bg-base-100 image-full w-96 shadow-sm">
                <figure>
                    <img src="{{ asset('images/card.jpg') }}" alt="Alumnos" class="w-full" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ __('Gestión Alumnos') }}</h2>
                    <p>{{ __('Gestiona los alumnos actuales, editalos y eliminalos') }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ url('usuarios') }}"><button class="btn btn-primary">{{ __('Ver Alumnos') }}</button></a>
                    </div>
                </div>
            </div>
        </div>

    @endauth
</x-layouts.layout>