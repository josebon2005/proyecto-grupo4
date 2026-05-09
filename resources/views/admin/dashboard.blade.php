@extends('layouts.admin')

@section('titulo', 'Dashboard')

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-gray-500 text-sm">Categorías</h3>
            <p class="text-3xl font-bold text-indigo-600">{{ $categorias }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-gray-500 text-sm">Productos</h3>
            <p class="text-3xl font-bold text-emerald-600">{{ $productos }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-gray-500 text-sm">Comercios</h3>
            <p class="text-3xl font-bold text-blue-600">{{ $comercios }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-gray-500 text-sm">Pedidos</h3>
            <p class="text-3xl font-bold text-orange-600">{{ $pedidos }}</p>
        </div>
    </div>

    <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
        <h3 class="text-xl font-bold text-gray-700 mb-2">
            Bienvenido a LocalMarket
        </h3>

        <p class="text-gray-600">
            Panel preliminar para administrar categorías, productos, comercios,
            usuarios, pedidos e inventario.
        </p>
    </div>
@endsection
