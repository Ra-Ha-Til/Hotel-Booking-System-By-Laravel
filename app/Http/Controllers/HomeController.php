<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $data = new Booking;
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)
            ->exists(); // ✅ FIXED

        if ($isBooked) {
            return redirect()->back()->with('message', 'Room is already booked. Please try a different date.');
        } else {
            $data->start_date = $startDate;
            $data->end_date = $endDate;

            $data->save();

            return redirect()->back()->with('message', 'Room booked successfully!');
        }
    }

}
