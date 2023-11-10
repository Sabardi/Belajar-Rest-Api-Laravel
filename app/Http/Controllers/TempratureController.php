<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tempratur;

class TempratureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $temperatures = tempratur::all();
        return response()->json($temperatures);
    }

    public function store(Request $request)
    {
        //
        $temperature = tempratur::create($request->all());
        return response()->json($temperature, 201);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'temperature' => 'required',
            'humidity' => 'required',
        ]);

        $id->update($request->all());

        return response()->json($id, 200);
    }


    public function destroy(tempratur $data)
    {
        $data->delete();
        return response()->json(null, 204);
    }
}
