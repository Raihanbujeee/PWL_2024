<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'Nim:244107020087 <br> Nama:Raihan Akbar Putra Prasetyo';
    }
}