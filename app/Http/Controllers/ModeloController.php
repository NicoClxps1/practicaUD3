<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listar todos los modelos
        $modelos = Modelo::all();
        return response()->json($modelos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cilindrada' => 'required|string|max:50',
            'tipo_motor' => 'required|string|max:50',
        ]);

        // Crear un nuevo modelo
        $modelo = Modelo::create($request->all());

        return response()->json($modelo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar un modelo específico
        $modelo = Modelo::find($id);

        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrado'], 404);
        }

        return response()->json($modelo, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'string|max:255',
            'descripcion' => 'string',
            'cilindrada' => 'string|max:50',
            'tipo_motor' => 'string|max:50',
        ]);

        // Buscar el modelo
        $modelo = Modelo::find($id);

        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrado'], 404);
        }

        // Actualizar los datos del modelo
        $modelo->update($request->all());

        return response()->json($modelo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el modelo
        $modelo = Modelo::find($id);

        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrado'], 404);
        }

        // Eliminar el modelo
        $modelo->delete();

        return response()->json(['message' => 'Modelo eliminado correctamente'], 200);
    }
}
