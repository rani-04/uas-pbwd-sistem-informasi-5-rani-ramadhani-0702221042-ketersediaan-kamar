<?php

// app/Http/Controllers/RoomController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $levels = ['Ground Floor', 'First Floor', 'Second Floor'];
        return view('rooms.create', compact('levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string|max:255',
            'room_level' => 'required|string|in:Ground Floor,First Floor,Second Floor',
            'is_available' => 'required|boolean',
        ]);

        Room::create([
            'room_number' => $request->room_number,
            'room_level' => $request->room_level,
            'is_available' => $request->is_available,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room added successfully.');
    }
}
