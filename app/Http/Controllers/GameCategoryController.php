<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameCategory;

class GameCategoryController extends Controller
{
    public function index()
    {
        return response()->json(GameCategory::all());
    }

    public function show($id)
    {
        return response()->json(GameCategory::find($id));
    }
}
