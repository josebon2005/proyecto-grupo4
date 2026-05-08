<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'comercio_id',
        'categoria_id',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'activo',
    ];

    public function comercio()
    {
        return $this->belongsTo(Comercio::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function pedidoDetalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }

    public function movimientosInventario()
    {
        return $this->hasMany(InventarioMovimiento::class);
    }
}
