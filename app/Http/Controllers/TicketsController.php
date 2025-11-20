<?php

namespace App\Http\Controllers;

use App\Models\Tickets; // pastikan model singular

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Tickets::all(); // ambil semua data
        return view('tickets', compact('tickets')); // view: resources/views/tickets.blade.php
    }
}
