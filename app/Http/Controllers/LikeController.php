<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        DB::table('likes')->updateOrInsert(
            ['juego_id' => $request->juego_id, 'user_id' => $request->user_id],
            ['tipo' => 'like', 'fecha' => now()]
        );

        return back()->with('success', '¡Te gustó el juego!');
    }

    public function dislike(Request $request)
    {
        DB::table('likes')->updateOrInsert(
            ['juego_id' => $request->juego_id, 'user_id' => $request->user_id],
            ['tipo' => 'dislike', 'fecha' => now()]
        );

        return back()->with('success', '¡No te gustó el juego!');
    }
}
// This controller handles the like and dislike functionality for games.