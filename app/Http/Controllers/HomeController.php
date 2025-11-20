<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        return view('home', compact('home'));
    }
}

