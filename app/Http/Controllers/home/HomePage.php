<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;

class HomePage extends Controller
{
    public function __invoke()
    {
        return view('main.home');
    }
}
