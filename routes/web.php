<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Controller;


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/index', [Controller::class, 'index']);

Route::post('/send-emails', [EmailController::class, 'sendEmails'])->name('send.emails');
