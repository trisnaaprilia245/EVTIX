<?php

namespace App\Http\Controllers;

use App\Models\Events;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::all(); // ambil seluruh data

        return view('events', compact('events')); 
    }
}
