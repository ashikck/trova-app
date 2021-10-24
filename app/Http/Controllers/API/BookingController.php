<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::query()->paginate(5);
        return response()->json($bookings);
    }

    public function status($service, $status)
    {
        $bookings = Booking::query()
            ->where('status', $status)
            ->where('service_id', $service)
            ->paginate(5);
        return response()->json($bookings);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'status' => 'required'
        ]);

        $booking->status = $request->get('status');

        $booking->save();

        return response()->json($booking);
    }
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'status' => 'required'
        ]);
        $currentStatus = $request->get('status');
        if ($currentStatus == "Pending") {
            $booking->status = "Active";
        } else if ($currentStatus == "Active") {
            $booking->status = "Payment";
        }
        $booking->save();

        return response()->json($booking);
    }
}
