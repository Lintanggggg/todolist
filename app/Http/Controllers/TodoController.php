<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu()
    {
        return view('menu.index');
    }
}