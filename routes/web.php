<?php

use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/world', function () {
 return 'World';
});

Route::get('/', function () {
 return 'Selamat datang';
});

Route::get('/about', function () {
 return 'Nim:244107020087 <br> 
 Nama:Raihan Akbar Putra Prasetyo' ;
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});