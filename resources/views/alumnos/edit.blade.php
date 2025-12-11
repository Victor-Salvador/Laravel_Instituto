<x-layouts.layout>
    <div class="bg-blue-200 h-full flex justify-center items-center">
        <form id="editAlumnoForm" method="POST" action="{{ route('alumnos.update', $alumno->id) }}" class="bg-white rounded-lg p-10 flex flex-col w-75">
            @csrf
            @method("PATCH")
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="border p-2" value="{{ $alumno->nombre}}" required>
            @error('nombre')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="border p-2" value="{{ $alumno->apellido}}" required>
            @error('apellido')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="border p-2" value="{{ $alumno->email}}" required>
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <label for="fecha_nacimiento">Fecha Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border p-2" value="{{ $alumno->fecha_nacimiento}}" required>
            @error('fecha_nacimiento')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <input class="mt-5 btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('editAlumnoForm');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¿Quieres actualizar este alumno?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, actualizar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</x-layouts.layout>
