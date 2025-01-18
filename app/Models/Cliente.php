<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
    ];

    /**
     * Relación 1..N con Venta.
     * Un cliente puede tener muchas ventas.
     */
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
