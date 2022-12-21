<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function trains()
    {
        return view('trains');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }
}
