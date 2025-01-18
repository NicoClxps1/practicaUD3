<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listar todas las motos
        $motos = Moto::all();
        return response()->json($motos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'modelo_id' => 'required|exists:modelos,id',
        ]);

        // Crear una nueva moto
        $moto = Moto::create($request->all());

        return response()->json($moto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar una moto específica
        $moto = Moto::find($id);

        if (!$moto) {
            return response()->json(['message' => 'Moto no encontrada'], 404);
        }

        return response()->json($moto, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'marca' => 'string|max:255',
            'modelo' => 'string|max:255',
            'precio' => 'numeric|min:0',
            'modelo_id' => 'exists:modelos,id',
        ]);

        // Buscar la moto
        $moto = Moto::find($id);

        if (!$moto) {
            return response()->json(['message' => 'Moto no encontrada'], 404);
        }

        // Actualizar los datos de la moto
        $moto->update($request->all());

        return response()->json($moto, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar la moto
        $moto = Moto::find($id);

        if (!$moto) {
            return response()->json(['message' => 'Moto no encontrada'], 404);
        }

        // Eliminar la moto
        $moto->delete();

        return response()->json(['message' => 'Moto eliminada correctamente'], 200);
    }
}
