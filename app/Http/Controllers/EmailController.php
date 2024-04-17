<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class EmailController extends Controller
{
    public function sendEmails(Request $request)
    {

        // Envía el correo electrónico
        Mail::to('pruebaaa452@gmail.com')->send(new ContactForm($request->all()));

        // Verifica si se proporcionó un correo electrónico alternativo y envía el correo a esa dirección también
        if ($request->filled('email')) {
            Mail::to($request->input('email'))->send(new ContactForm($request->all()));
        }

        
        
        // Redirige a alguna página de confirmación
        return redirect()->back()->with('message', '¡Correo enviado correctamente!');
    }
}