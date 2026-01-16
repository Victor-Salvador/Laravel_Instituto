<x-dropdown>
    <x-slot name="trigger">
        Selecciona un idioma
    </x-slot>
    <x-slot name="content">
        <ul class="text-black">
            @foreach(config("language") as $code => $data)
                <a href="{{ route('set_lang', ['lang' => $code]) }}">
                    {{$data['name']}} {{$data['flag']}}
                </a>
                <br>
            @endforeach
        </ul>
    </x-slot>
</x-dropdown>