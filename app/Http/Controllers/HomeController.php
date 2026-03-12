<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "BlueDoors Hotel";
        return view('home')->with('nama',$nama);        
    }

    public function contact()
    {
        return view('contact');
    }
}
