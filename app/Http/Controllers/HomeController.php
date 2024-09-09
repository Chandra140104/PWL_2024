<?php

// namespace App\Http\Controllers;

// class HomeController extends Controller
// {
//     public function index() {
//         return 'Selamat Datang';
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}


