<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

    public function about() {
        return 'Nim: 244107020087 <br> Nama: Raihan Akbar Putra Prasetyo';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}