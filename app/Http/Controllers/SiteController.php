<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function greeting()
    {
        return view("greeting");
    }

    public function welcome()
    {
        return view("welcome");
    }
}
