<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getHome()
    {
        return view('home');
    }
}

class AboutController extends Controller
{
    public function getFridayClub()
    {
        return view('FridayClub');
    }
}