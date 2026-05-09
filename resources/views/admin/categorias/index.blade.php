@extends('layouts.admin')

@section('titulo', 'Categorías')

@section('contenido')
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="text-2xl font-bold text-gray-700">Gestión de Categorías</h3>
                <p class="text-gray-500">Listado de categorías disponibles para productos.</p>
            </div>

            <a href="{{ route('admin.categorias.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                + Nueva categoría
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                <tr class="bg-gray-100 text-left text-gray-600">
                    <th class="p-3">ID</th>
                    <th class="p-3">Icono</th>
                    <th class="p-3">Nombre</th>
                    <th class="p-3">Descripción</th>
                    <th class="p-3 text-right">Acciones</th>
                </tr>
                </thead>

                <tbody>
                @forelse($categorias as $categoria)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $categoria->id }}</td>
                        <td class="p-3 text-2xl">{{ $categoria->icono ?? '📦' }}</td>
                        <td class="p-3 font-semibold">{{ $categoria->nombre }}</td>
                        <td class="p-3 text-gray-600">{{ $categoria->descripcion }}</td>

                        <td class="p-3 text-right">
                            <a href="{{ route('admin.categorias.edit', $categoria) }}"
                               class="bg-yellow-400 text-white px-3 py-1 rounded-lg hover:bg-yellow-500">
                                Editar
                            </a>

                            <form action="{{ route('admin.categorias.destroy', $categoria) }}"
                                  method="POST"
                                  class="inline formulario-eliminar">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-6 text-center text-gray-500">
                            No hay categorías registradas.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $categorias->links() }}
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Eliminar categoría?',
                    text: 'Esta acción no se puede deshacer.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#EF4444',
                    cancelButtonColor: '#6B7280',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
