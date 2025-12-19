<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::getClientes();
        return view('Clientes.editC', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientes.createC');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'telefono' => 'required',
        ]);
        Disfraz::createDisfraz($request->all());
        return redirect()->route('Clientes.indexC')
            ->with('success', 'Cliente registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('Clientes.editc', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'telefono' => 'required',
        ]);
        $cliente->updateDisfraz($request->all(), $cliente->id);
        return redirect()->route('Disfraces.index')
            ->with('success', 'Disfraces actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        Cliente::deleteCliente($cliente);
        return redirect()->route('Disfraces.index')
            ->with('success', 'Disfraces eliminado.');
    }
}
