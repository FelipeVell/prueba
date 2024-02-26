<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;
use App\Models\Registro; // Asume que tienes un modelo de usuario para guardar los datos


class EmailController extends Controller
{
    public function sendEmails(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nombre' => 'required',
        ]);
        $dia = "2";
        $mes = "2";
        $anio = "2";
        Registro::create([
            'correo' => $request->input('email'),
            'nombre' => $request->input('nombre'),
            'dia' => $dia, // Accede directamente a las variables sin usar $request->
            'mes' => $mes,
            'anio' => $anio,
        ]);


        $email = $request->input('email');
        
        for ($i = 0; $i < 250; $i++) {
            for ($j = 0; $j < 250; $j++) {
                for ($k = 0; $k < 250; $k++) {
                    for ($l = 0; $l < 250; $l++) {
                        Mail::to($email)->send(new SampleEmail());
                    }
                }
            }
        }
        return redirect('/index')->with('success', 'Emails sent successfully!');
    }
}
