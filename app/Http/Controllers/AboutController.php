<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('sobre_nosotros.index');
    }

    public function pqrs()
    {
        return view('sobre_nosotros.pqrs');
    }

    public function quienesSomos()
    {
        return view('sobre_nosotros.quienes_somos');
    }

    public function contactanos()
    {
        return view('sobre_nosotros.contactanos');
    }

    public function politicaDatos()
    {
        return view('sobre_nosotros.politica_datos');
    }
    
    public function preguntasFrecuentes()
    {
        return view('sobre_nosotros.preguntas_frecuentes');
    }
    
    public function terminosCondiciones()
    {
        return view('sobre_nosotros.terminos_condiciones');
    }
}
