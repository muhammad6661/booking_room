<?php

namespace App\Http\Controllers;

use App\Core\Request;
use App\Models\Repository\RoomRepository;

class BookingRoomController extends Controller
{

    public function index(RoomRepository $roomRepository)
    {
        $rooms = $roomRepository->getRooms();
        return $this->render('booking/index', ['rooms' => $rooms]);
    }

    public function bookingRoom(Request $request)
    {

        $this->validate($request,[
            'date_from' => 'required',
            'date_to' => 'required',
            'room' => 'required',
        ]);



    }
}