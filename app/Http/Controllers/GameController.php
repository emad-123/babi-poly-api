<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(Game::all());
    }

    public function show($id)
    {
        return response()->json(Game::find($id));
    }
}
