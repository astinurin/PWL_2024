<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama    : Asti Nurin <br> NIM   : 2241720236';
    }

    public function articles($id){
        return 'Artikel nomor '. $id;
    }
}
