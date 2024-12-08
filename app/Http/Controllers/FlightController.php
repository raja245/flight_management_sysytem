<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{

    public function uploadFlight(Request $request)
    {
        // $this->authorize('manage-flights');

        $request->validate([
            'flight_number' => 'required|string',
            'departure_airport_id' => 'required|exists:airports,id',
            'arrival_airport_id' => 'required|exists:airports,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ]);

        $flight = Flight::create($request->all());
        return response()->json($flight, 201);
    }

    public function getFlights()
    {
        return Flight::all();
    }

    public function getFlight($id)
    {
        return Flight::findOrFail($id);
    }

    public function updateFlight(Request $request, $id)
    {
        // $this->authorize('manage-flights');

        $flight = Flight::findOrFail($id);
        $flight->update($request->all());
        return response()->json($flight);
    }

    public function deleteFlight($id)
    {
        // $this->authorize('manage-flights');

        $flight = Flight::findOrFail($id);
        $flight->delete();
        return response()->json(['message' => 'Flight deleted successfully']);
    }

}
