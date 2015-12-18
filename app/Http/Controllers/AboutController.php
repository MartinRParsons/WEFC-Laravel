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

    public function getAbout()
    {
        return view('About');
    }

    public function getFridayClub()
    {
        return view('FridayClub');
    }

    public function getMeetings()
    {
        return view('Meetings');
    }

    public function getContact()
    {
        return view('Contact');
    }
    public function getTypography()
    {
        return view('Typography');
    }
  }
