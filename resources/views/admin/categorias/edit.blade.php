@extends('layouts.admin')

@section('titulo', 'Editar Categoría')

@section('contenido')
    <div class="bg-white rounded-xl shadow-md p-6 max-w-2xl">
        <h3 class="text-2xl font-bold text-gray-700 mb-6">Editar Categoría</h3>

        <form action="{{ route('admin.categorias.update', $categoria) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nombre</label>
                <input type="text"
                       name="nombre"
                       value="{{ old('nombre', $categoria->nombre) }}"
                       class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-indigo-200">

                @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Icono</label>
                <input type="text"
                       name="icono"
                       value="{{ old('icono', $categoria->icono) }}"
                       class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-indigo-200">

                @error('icono')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Descripción</label>
                <textarea name="descripcion"
                          rows="4"
                          class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-indigo-200">{{ old('descripcion', $categoria->descripcion) }}</textarea>

                @error('descripcion')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                    Actualizar
                </button>

                <a href="{{ route('admin.categorias.index') }}"
                   class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
