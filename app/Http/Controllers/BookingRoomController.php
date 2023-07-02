<?php

namespace App\Http\Controllers;

use App\Core\Auth;
use App\Core\Request;
use App\Models\Entity\BookingRoom;
use App\Models\Repository\BookingRoomRepository;
use App\Models\Repository\RoomRepository;
use App\Models\Repository\UserRepository;
use App\Services\SendMailService;
use App\Services\SendSmsService;
use PHPMailer\PHPMailer\Exception;

class BookingRoomController extends Controller
{

    public function index(RoomRepository $roomRepository)
    {
        $rooms = $roomRepository->getRooms();
        return $this->render('booking/index', ['rooms' => $rooms]);
    }

    public function bookingRoom(Request $request, BookingRoomRepository $bookingRoomRepository, RoomRepository $roomRepository,
                                SendMailService $sendMailService, UserRepository $userRepository, SendSmsService $sendSmsService)
    {
        $this->validate($request,[
            'date_from' => 'required',
            'date_to' => 'required',
            'room' => 'required',
        ]);

        $room = $roomRepository->getById($request->get('room'));
        if (!$room) {
            $this->redirectWithError('/booking-room', "room is not exist");
            return;
        }

        $format = 'Y-m-d H:i';
        $dateFrom = \DateTimeImmutable::createFromFormat($format, $request->get('date_from'));
        $dateTo = \DateTimeImmutable::createFromFormat($format, $request->get('date_to'));
        if ($dateTo === false or $dateFrom === false) {
            $this->redirectWithError('/booking-room', "Date format incorrect");
         return;
        }

        $user = $userRepository->getOneUserByEmail(Auth::getUser()->getEmail());
        $bookingRoom = $bookingRoomRepository->checkRoom($room, $dateFrom, $dateTo);

        if (!$bookingRoom) {
            $bookingRoom = new BookingRoom();
            $bookingRoom->setRoom($room);
            $bookingRoom->setUser($user);
            $bookingRoom->setDateFrom($dateFrom);
            $bookingRoom->setDateTo($dateTo);

            $bookingRoom = $bookingRoomRepository->create($bookingRoom);

            $text = 'Вам была забронирована комната!';
        } else {
            $text = 'Комната уже забронирована';
        }
        $message = $this->render('/email/send', ['booking' => $bookingRoom, 'room' => $room, 'text' => $text]);
        $subject = 'Бронирование комнаты';
        $mail = $user->getEmail();

        $sendMailService->sendToMail($mail, $subject, $message);

//        $message = "$text\n";
//        $message .= "Кабинет:$room->getTitle()\n";
//        $message .= "Адрес:$room->getAddress()\n";
//        $message .= "Пользователь забронировал:$bookingRoom->getUser()->getFio()\n";
//        $message .= "Дата бронирования: От $bookingRoom->getDateFrom() до $bookingRoom->getDateTo()";
//        $sendSmsService->SendSms($user->getPhone(), $message);

        return $this->render('booking/send');

    }


    public function sendBooking()
    {
        return $this->render('booking/send');
    }


}