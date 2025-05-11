<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    // Store a new player
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'uuid' => 'required|string|max:255|unique:table_of_players,uuid',
            'role' => 'nullable|string|max:255',
            'hobby' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Player::create($validated);

        return redirect()->route('member.create')->with('player_success', 'Player created successfully!');
    }

    // Delete a player
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('member.table')->with('success', 'Player deleted successfully.');
    }

    public function table()
    {
        $players = \App\Models\Player::all();
        return view('player.table', compact('players'));
    }
}
