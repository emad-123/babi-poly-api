<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameUser;

class GameUserController extends Controller
{
    public function index()
    {
        return response()->json(GameUser::all());
    }
}

