<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // Devuelve la vista llamada 'hola_mundo'.
        return view('hola_mundo');
    }

    public function showXbox()
    {
        // Devuelve la vista llamada 'xbox'.
        return view('xbox');
    }

    public function showPlay()
    {
        // Devuelve la vista llamada 'xbox'.
        return view('play');
    }

    public function showForm()
    {
        // Devuelve la vista llamada 'xbox'.
        return view('formulario');
    }

    public function welcome()
    {
        // Devuelve la vista llamada 'xbox'.
        return view('welcome');
    }

    public function showContactForm()
    {
        // Devuelve la vista llamada 'xbox'.
        return view('contact_form');
    }
}
