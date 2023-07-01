<?php

use App\Core\App;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingRoomController;
use App\Http\Controllers\HomeController;
$router = App::$app->route;



$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'auth']);
$router->get('/registration', [AuthController::class, 'registration']);
$router->post('/registration', [AuthController::class, 'submitRegistration']);
$router->get('/logout', [AuthController::class, 'logout']);


$router->get('/booking-room', [BookingRoomController::class, 'index']);
$router->post('/booking-room', [BookingRoomController::class, 'bookingRoom']);
