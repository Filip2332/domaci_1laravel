<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome',[\App\Http\Controllers\HomeController::class,'index']);

Route::view('/about','about');

Route::get('shop',[\App\Http\Controllers\ShopController::class,'index']);

Route::get('/kontakt',[\App\Http\Controllers\ContactController::class,'index']);



Route::get("/admin/all-contacts",[\App\Http\Controllers\ContactController::class,"getAllContacts"]);
