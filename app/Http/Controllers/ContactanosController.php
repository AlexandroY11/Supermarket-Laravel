<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('sobre_nosotros.contactanos', compact('productos'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'producto' => 'required|string|max:255',
            'mensaje' => 'required|string|max:1000',
        ]);

        // return $request->all();
        Mail::to('homecolor11@gmail.com')->send(new ContactanosMailable($request->all()));
        return redirect()->route('contactanos.index')->with('success', 'Mensaje enviado correctamente');
    }

}
