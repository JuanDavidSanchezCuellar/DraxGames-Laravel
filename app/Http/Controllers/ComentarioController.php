<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function verFormulario()
    {
        return view('agregarComentario');
    }

    public function agregar(Request $request)
    {
        DB::table('comentarios')->insert([
            'juego_id' => $request->juego,
            'user_id' => $request->usuario_id,
            'comentario' => $request->comentario,
            'fecha' => now(),
        ]);

        return redirect()->route('comentarios.formulario')->with('success', 'Comentario agregado.');
    }


    public function ver(Request $request)
    {
        $juegoId = $request->input('juego_id');
        $userId = $request->input('user_id');
    
        $comentarios = Comentario::where('juego_id', $juegoId)
            ->where('user_id', $userId)
            ->orderBy('fecha', 'desc')
            ->get();
    
        return view('comentarios.ver', compact('comentarios', 'juegoId', 'userId'));
    }



public function buscar()
{
    return view('comentarios.buscar');
}

}
