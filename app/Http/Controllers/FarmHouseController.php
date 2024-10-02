<?php

namespace App\Http\Controllers;

use App\Models\FarmHouse;
use Illuminate\Http\Request;

class FarmHouseController extends Controller
{
    public function index()
    {
        $farm = FarmHouse::all();
        return response()->json($farm);
    }

    public function store(Request $request)
    {
        $farm = new FarmHouse();
        $farm->name = $request->name;
        $farm->location = $request->location;
        $farm->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->storeAs('public/farm', $filename);
            $farm->image = $filename;
        } else {
            return $request;
            $farm->image = '';
        }

        $farm->save();
        return response()->json($farm);
    }

    public function delete($id)
    {
        $farm = FarmHouse::find($id);
        $farm->delete();
        return response()->json($farm);
    }
}
