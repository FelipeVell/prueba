<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Controller;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/index', [Controller::class, 'index']);
Route::get('/xbox', [Controller::class, 'showXbox'])->name('xbox');
Route::get('/play', [Controller::class, 'showPlay'])->name('play');
Route::get('/formulario', [Controller::class, 'showForm'])->name('formulario');
Route::get('/welcome', [Controller::class, 'welcome'])->name('welcome');

Route::get('/contacto', [Controller::class, 'showContactForm'])->name('contacto');
Route::post('/contacto/enviar', [EmailController::class, 'sendEmails'])->name('enviar.email');

