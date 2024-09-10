<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json($vehicles);
    }
    public function showIndex()
    {
        $vehicles = Vehicle::all();
        return view('index', compact('vehicles'));
    }
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'plate_number' => 'required|string|unique:vehicles,plate_number',
            'insurance_date' => 'required|date',
        ]);

        $vehicle = Vehicle::create($validatedData);

        return response()->json($vehicle, 201);
    }
    public function create()
    {

        return view('vehicles.create');
    }


    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return response()->json($vehicle);
    }

    public function update(Request $request, $id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);

            $validatedData = $request->validate([
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'plate_number' => 'required|string|unique:vehicles,plate_number,' . $id,
                'insurance_date' => 'required|date',
            ]);

            $vehicle->update($validatedData);

            return response()->json($vehicle);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return response()->json(null, 204);
    }
}
