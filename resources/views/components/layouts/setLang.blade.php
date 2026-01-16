<select name="lang" id="" class="text-black mr-3" onchange="window.location.href=this.value">
    <option value="" disabled selected>Selecciona un idioma</option>
    @foreach(config("languages") as $code => $content)
        <option class="text-black" value="{{route("set_lang", $code)}}">{{$content['name']}} {{$content['flag']}}</option>
    @endforeach
</select>