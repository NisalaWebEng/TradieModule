<?php

namespace App\Http\Controllers;

use App\Models\Tradie;
use Illuminate\Http\Request;

class TradieController extends Controller
{
    
    public function showAllTradies()
    {
        return response()->json(Tradie::all());
    }

    public function showOneTradie($id)
    {
        return response()->json(Tradie::find($id));
    }

    public function create(Request $request)
    {
        $tradie = Tradie::create($request->all());

        return response()->json($tradie, 201);
    }

    public function update($id, Request $request)
    {
        $tradie = Tradie::findOrFail($id);
        $tradie->update($request->all());

        return response()->json($tradie, 200);
    }

    public function delete($id)
    {
        Tradie::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
