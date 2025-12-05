<x-layouts.layout>
    @guest
    <div
        class="hero h-full"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Bienvenido</h1>
                <p class="mb-5">
                    Primer proyecto de Laravel
                </p>
                <button class="btn btn-primary">Comenzar</button>
            </div>
        </div>
    </div>
    @endguest
    @auth
            <div class="card bg-base-100 image-full w-96 shadow-sm relative top-5 left-5">
                <figure>
                    <img
                        src="{{asset("images/card.jpg")}}"
                        alt="Shoes" class="w-full"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Gestión Alumnos</h2>
                    <p>Gestiona los alumnos actuales, editalos y eliminalos</p>
                    <div class="card-actions justify-end">
                        <a href="alumnos"><button class="btn btn-primary">Gestionar Alumnos</button></a>
                    </div>
                </div>
            </div>
    @endauth
</x-layouts.layout>
