<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class HomeController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('home', compact('players'));
    }
}
