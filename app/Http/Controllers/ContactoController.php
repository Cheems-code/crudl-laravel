<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index() {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    public function create() {
        return view('contactos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'nullable|email',
        ]);

        Contacto::create($request->all());
        return redirect()->route('contactos.index')->with('success', 'Contacto creado');
    }

    public function edit(Contacto $contacto) {
        return view('contactos.edit', compact('contacto'));
    }

    public function update(Request $request, Contacto $contacto) {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'nullable|email',
        ]);

        $contacto->update($request->all());
        return redirect()->route('contactos.index')->with('success', 'Contacto actualizado');
    }

    public function destroy(Contacto $contacto) {
        $contacto->delete();
        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado');
    }
}
