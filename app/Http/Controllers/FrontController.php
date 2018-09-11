<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $rooms=Product::all();
        return view('front.home', compact('rooms'));
    }
    
    public function rooms()
    {
        $rooms=Product::all();
        return view('front.rooms', compact('rooms'));
    }

    public function room()
    {
        return view('front.room');
    }
}
