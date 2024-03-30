<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        /* RETURN SULLA HOME */
        return view('home');
    }
}