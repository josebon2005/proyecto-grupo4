<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LocalMarket - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-indigo-700 text-white fixed h-full">
        <div class="p-6 border-b border-indigo-500">
            <h1 class="text-2xl font-bold">LocalMarket</h1>
            <p class="text-sm text-indigo-200">Panel Admin</p>
        </div>

        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Dashboard
            </a>

            <a href="{{ route('admin.categorias.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Categorías
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Productos
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Comercios
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Usuarios
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Pedidos
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-indigo-600">
                Inventario
            </a>
        </nav>
    </aside>

    {{-- Contenido principal --}}
    <main class="ml-64 flex-1">
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-700">
                @yield('titulo', 'Panel Administrativo')
            </h2>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold">
                    A
                </div>
                <span class="text-gray-600 font-medium">
                    Admin LocalMarket
                </span>
            </div>
        </header>

        <section class="p-6">
            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Correcto',
                        text: "{{ session('success') }}",
                        timer: 2000,
                        showConfirmButton: false
                    });
                </script>
            @endif

            @yield('contenido')
        </section>
    </main>

</div>

@yield('scripts')

</body>
</html>
