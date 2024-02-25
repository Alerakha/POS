<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showfoodBeverages()
    {
        return view('foodBeverages');
    }
    public function showbeautyHealth()
    {
        return view('beautyHealth');
    }
    public function showhomeCare()
    {
        return view('homeCare');
    }
    public function showbabyKid()
    {
        return view('babyKid');
    }
}
