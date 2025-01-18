<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'cilindrada',
        'tipo_motor',
    ];

    /**
     * Relación 1..N con Moto.
     * Un modelo puede tener muchas motos.
     */
    public function motos()
    {
        return $this->hasMany(Moto::class);
    }
}
