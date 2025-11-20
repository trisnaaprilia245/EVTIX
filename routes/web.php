<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TicketsController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/tickets', [TicketsController::class, 'index'])->name('tickets');