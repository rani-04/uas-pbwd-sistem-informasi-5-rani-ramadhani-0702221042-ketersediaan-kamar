<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/room-levels', [RoomController::class, 'showRoomLevels'])->name('room-levels.index');
Route::post('/room-levels', [RoomController::class, 'storeRoomLevel'])->name('room-levels.store');

// Routes for Rooms
Route::get('/rooms', [RoomController::class, 'showRooms'])->name('rooms.index');
Route::post('/rooms', [RoomController::class, 'storeRoom'])->name('rooms.store');

// routes/web.php
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

// Routes for Patients
Route::get('/patients', [RoomController::class, 'showPatients'])->name('patients.index');
Route::post('/patients', [RoomController::class, 'storePatient'])->name('patients.store');

// Routes for Reservations
Route::get('/reservations', [RoomController::class, 'showReservations'])->name('reservations.index');
Route::post('/reservations', [RoomController::class, 'storeReservation'])->name('reservations.store');

Route::get('/', function () {
    return view('welcome');
});
