<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'precio',
        'modelo_id',
    ];

    /**
     * Relación N..1 con Modelo.
     * Una moto pertenece a un modelo.
     */
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    /**
     * Relación N..N con Venta (a través de una tabla intermedia).
     */
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'venta_moto');
    }
}
