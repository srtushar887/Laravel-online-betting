<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\game;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $cricket_games = game::where('category_id',2)->get();
        $footbal_games = game::where('category_id',1)->get();
        return view('user.index',compact('cricket_games','footbal_games'));
    }
}
