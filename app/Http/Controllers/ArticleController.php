<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle($id)
            {
                return "Ini adalah halaman untuk artikel dengan ID: " . $id;
            }
}
