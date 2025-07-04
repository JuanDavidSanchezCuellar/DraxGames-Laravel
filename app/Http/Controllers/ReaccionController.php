<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaccion;

class ReaccionController extends Controller
{
    public function formulario()
    {
        return view('reacciones.formulario');
    }

    public function ver(Request $request)
    {
        $juegoId = $request->input('juego_id');
        $jugadorId = $request->input('jugador_id');
    
        $reacciones = Reaccion::where('juego_id', $juegoId)
            ->where('user_id', $jugadorId) // Aquí usas user_id en lugar de jugador_id
            ->get();
    
        return view('reacciones.ver', compact('reacciones', 'juegoId', 'jugadorId'));
    }
    
}
