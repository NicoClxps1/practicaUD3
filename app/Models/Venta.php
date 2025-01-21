<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'cliente_id',  // Llave foránea que relaciona con el cliente
        'total',       // Total de la venta
        'fecha_venta', // Fecha de la venta
    ];

    /**
     * Relación N..1 con Cliente.
     * Una venta pertenece a un cliente.
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * Relación N..N con Moto (a través de una tabla intermedia `venta_moto`).
     */
    public function motos()
    {
        return $this->belongsToMany(Moto::class, 'venta_moto')
            ->withTimestamps(); // Incluye created_at y updated_at en la tabla pivote
    }
}
