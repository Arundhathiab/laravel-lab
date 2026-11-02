<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function hello($name)
    {
        return "Hello " . $name;
    }

    public function about()
    {
        return view('about');
    }
}
