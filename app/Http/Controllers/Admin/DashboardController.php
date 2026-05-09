<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Comercio;
use App\Models\Pedido;
use App\Models\Producto;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'categorias' => Categoria::count(),
            'productos' => Producto::count(),
            'comercios' => Comercio::count(),
            'pedidos' => Pedido::count(),
        ]);
    }
}
