<?php

use App\Http\Controllers\ServiceKomporController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceKomporController::class, 'index']);
Route::get('/about-us', [ServiceKomporController::class, 'aboutus']);
Route::get('/contact-us', [ServiceKomporController::class, 'contactus']);
