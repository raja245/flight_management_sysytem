<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Flight;

class BookingController extends Controller
{
    public function createBooking(Request $request)
    {
        // $this->authorize('create-bookings');

        $request->validate([
            'flight_id' => 'required|exists:flights,id',
        ]);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'flight_id' => $request->flight_id,
        ]);

        return response()->json($booking, 201);
    }

    public function getBookings()
    {
        return Booking::where('user_id', auth()->id())->get();
    }

    public function cancelBooking($id)
    {
        // $this->authorize('cancel-bookings');

        $booking = Booking::findOrFail($id);
        $booking->delete();

        return response()->json(['message' => 'Booking canceled successfully']);
    }
}
