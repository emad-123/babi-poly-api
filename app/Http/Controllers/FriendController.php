<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index()
    {
        return response()->json(Friend::all());
    }

    public function show($id)
    {
        return response()->json(Friend::find($id));
    }
}
