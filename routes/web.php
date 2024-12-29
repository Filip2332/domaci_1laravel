<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "123";
});

Route::view('/welcome','welcome');

Route::view('/about','about');

Route::view('/shop','shop');
