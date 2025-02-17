<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '244107023004 Fabian Ananda Merdana';
    }


    public function articles($article){
        return 'Halaman Artikel dengan ID '. $article;
    }
    
}
