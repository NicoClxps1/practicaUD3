<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Moto;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listar todas las ventas con detalles del cliente y moto
        $ventas = Venta::with('cliente', 'moto')->get();
        return response()->json($ventas, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'moto_id' => 'required|exists:motos,id',
            'total' => 'required|numeric|min:0',
            'fecha_venta' => 'required|date',
        ]);

        // Crear una nueva venta
        $venta = Venta::create([
            'cliente_id' => $request->cliente_id,
            'moto_id' => $request->moto_id,
            'total' => $request->total,
            'fecha_venta' => $request->fecha_venta,
        ]);

        return response()->json($venta, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar una venta específica con detalles del cliente y moto
        $venta = Venta::with('cliente', 'moto')->find($id);

        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        return response()->json($venta, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'cliente_id' => 'exists:clientes,id',
            'moto_id' => 'exists:motos,id',
            'total' => 'numeric|min:0',
            'fecha_venta' => 'date',
        ]);

        // Buscar la venta
        $venta = Venta::find($id);

        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        // Actualizar los datos de la venta
        $venta->update($request->all());

        return response()->json($venta, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar la venta
        $venta = Venta::find($id);

        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        // Eliminar la venta
        $venta->delete();

        return response()->json(['message' => 'Venta eliminada correctamente'], 200);
    }
}
