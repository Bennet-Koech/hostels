<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    
    public function rooms()
    {
        return view('front.rooms');
    }

    public function room()
    {
        return view('front.room');
    }
}
