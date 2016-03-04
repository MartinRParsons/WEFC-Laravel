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

    public function getClubs()
    {
        return view('Clubs');
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
    public function getLadiesMeeting()
    {
        return view('LadiesMeeting');
    }
    public function getBibleStudy()
    {
        return view('BibleStudy');
    }
    public function getSundayServices()
    {
        return view('SundayServices');
    }
    public function getCoffeeMorning()
    {
        return view('CoffeeMorning');
    }
    public function getWednesdayClub()
    {
        return view('WednesdayClub');
    }
    public function getFridayClub()
    {
        return view('FridayClub');
    }
    public function getSPARK()
    {
        return Redirect('http://sparkinthepark.org.uk');
    }
  }
