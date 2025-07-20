<?php

namespace App\Http\Controllers;

use App\Models\PlayerProfile;
use Illuminate\Http\Request;

class PlayerProfileController extends Controller
{
    public function index()
    {
        return PlayerProfile::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'school' => 'nullable|string',
            'bio' => 'nullable|string',
            'video_url' => 'nullable|url',
        ]);

        return PlayerProfile::create($data);
    }

    public function show($id)
    {
        return PlayerProfile::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $player = PlayerProfile::findOrFail($id);
        $player->update($request->all());
        return $player;
    }

    public function destroy($id)
    {
        return PlayerProfile::destroy($id);
    }
}
