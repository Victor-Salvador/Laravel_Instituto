<x-layouts.layout>
    <div class="flex justify-center items-center h-full">
        <form method="GET" class="flex flex-col w-75">
            <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="border p-2">

            <label>Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="border p-2">

            <label>Email:</label>
            <input type="text" name="email" id="email" class="border p-2">

            <label>Fecha Nacimiento:</label>
            <input type="date" name="fechanac" id="fechanac" class="border p-2">

            <input class="bg-blue-400 p-3 rounded-xl mt-4 hover:bg-blue-200" type="submit" value="Crear">
        </form>
    </div>
</x-layouts.layout>
