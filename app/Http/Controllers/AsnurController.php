<?php

namespace App\Http\Controllers;

class AsnurController extends Controller
{
    public function team()
    {
        return view("team");
    }

    public function profile()
    {
        return view("profile");
    }

    public function contact()
    {
        return view("contact");
    }
}
