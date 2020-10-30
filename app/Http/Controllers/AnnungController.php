<?php

namespace App\Http\Controllers;

class AnnungController extends Controller
{
    public function one()
    {
        return view("annung-1");
    }

    public function two()
    {
        return view("annung-2");
    }

    public function three()
    {
        return view("annung-3");
    }
}
