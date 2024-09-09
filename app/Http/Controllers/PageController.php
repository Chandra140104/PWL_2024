<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }
        public function about() {
            return 'Chandra Bagus Sulaksono 2241760079';
            }
            public function showArticle($id)
            {
                return "Ini adalah halaman untuk artikel dengan ID: " . $id;
            }
}
