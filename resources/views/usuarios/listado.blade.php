<x-layouts.layout>
    <div class="overflow-x-auto h-full w-full">
        <a href="{{ route('usuarios.create') }}">
            <button class="bg-green-600 cursor-pointer hover:bg-green-400 py-3 px-4 m-3 text-white font-bold rounded-lg">
                {{__("Añadir usuario")}}
            </button>
        </a>
        <table class="table table-xs table-pin-rows table-pin-cols w-full">
            <tr>
                @foreach($campos as $campo)
                    <th class="p-3 text-white">{{ $campo }}</th>
                @endforeach
                <th class="p-3 text-white">Editar</th>
                <th class="p-3 text-white">Eliminar</th>
            </tr>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->fecha_nacimiento }}</td>
                    <td>{{ $usuario->created_at }}</td>
                    <td>{{ $usuario->updated_at }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">
                            <button class="bg-blue-600 cursor-pointer hover:bg-blue-400 py-3 px-4 text-white font-bold rounded-lg">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btnEliminar bg-red-600 cursor-pointer hover:bg-red-400 py-3 px-4 text-white font-bold rounded-lg">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="flex items-center justify-center mt-10 mb-10">
            {{ $usuarios->links() }}
        </div>
    </div>
</x-layouts.layout>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const botonesEliminar = document.querySelectorAll('.btnEliminar');

        botonesEliminar.forEach(boton => {
            boton.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Este usuario será eliminado permanentemente.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
