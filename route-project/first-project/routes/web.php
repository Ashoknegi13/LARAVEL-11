<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/co',function (){
    return view('contect');
});

Route::get('/home',function (){
    return view('home');
});


Route::get('/home/firstpost',function (){
    return view('firstpost');
});

// Route::get('/home', function (){
//     return "<h>This is home page</h1>";
// });

// Route::view('/home','home');