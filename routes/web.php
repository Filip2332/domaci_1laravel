<?php

use Illuminate\Support\Facades\Route;


Route::view('/welcome','welcome');

Route::view('/about','about');

Route::view('/shop','shop');

Route::get('/kontakt', function () {
    return view('kontakt');
});
