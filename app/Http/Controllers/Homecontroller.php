<?php
//Home POS Controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
