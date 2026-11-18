<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartieController extends Controller
{
    public function index()
    {
        $board = session('board', '---------'); // board de taille 9
        $player = session('player', 'X'); // joueur actuel
        return view('parties.index', ['board' => $board, 'player' => $player]);
    }
}
