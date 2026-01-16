<header class="bg-header h-header text-white flex justify-between items-center">
    <a href="/"><img src="{{asset('./images/logo.png')}}" alt="logo" class="h-17 m-5 max-h-full"></a>
    <h1 class="text-4xl">{{ __("Gestion de instituto escolar") }}</h1>
    <div class="space-x-2">

        @guest
        <a href="login"><button class="bg-white px-4 py-2 rounded-md text-black font-medium">Login</button></a>
        <a href="register"><button class="bg-gray-300 px-6 py-2 rounded-md mr-2 text-black font-medium">Register</button></a>
        <!--<button class="bg-neutral-600 px-8 py-2 rounded-md text-white mr-4 font-medium">English</button>-->
        @endguest
        @auth
            <div class="flex items-center">
                <span class="text-xl text-white mr-5"> {{auth()->user()->name}}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" name="logout" value="{{ __("Cerrar sesion") }}" class="bg-red-500 px-6 py-2 rounded-md text-black font-medium mr-5">
                </form>
                @role("admin")
                <a href="register"><button class="bg-blue-300 hover:bg-blue-500 px-6 py-2 rounded-md text-black font-medium mr-4">{{ __("Administrar") }}</button></a>
                @endrole
                <x-layouts.setLang/>
            </div>
            @endauth
    </div>

</header>
