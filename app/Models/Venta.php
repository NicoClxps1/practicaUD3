<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'moto_id',
        'total',
        'fecha_venta',
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
     * Relación N..N con Moto (a través de una tabla intermedia).
     */
    public function motos()
    {
        return $this->belongsToMany(Moto::class, 'venta_moto');
    }
}
