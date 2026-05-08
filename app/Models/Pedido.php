<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'comprador_id',
        'comercio_id',
        'total',
        'estado',
        'direccion_entrega',
        'notas',
    ];

    public function comprador()
    {
        return $this->belongsTo(User::class, 'comprador_id');
    }

    public function comercio()
    {
        return $this->belongsTo(Comercio::class);
    }

    public function detalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }
}
