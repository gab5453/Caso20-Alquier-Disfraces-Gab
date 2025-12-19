<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alquileres = Alquiler::getAlquieres();
        return view('Alquileres.editA', compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Alquileres.createA');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|max:30',
        ]);
        Alquiler::createAlquiler($request->all());
        return redirect()->route('Alquileres.index')
            ->with('success', 'Alquiler registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alquiler $alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alquiler $alquiler)
    {
        return view('Alquileres.editA', compact('alquiler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        $request->validate([
            'fecha' => 'required|max:30'
        ]);
        $alquiler->updateAlquiler($request->all(), $alquiler->id);
        return redirect()->route('Alquileres.index')
            ->with('success', 'Alquiler actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alquiler $alquiler)
    {
        Alquiler::deleteAlquiler($alquiler);
        return redirect()->route('Alquileres.index')
            ->with('success', 'Alquiler eliminado.');
    }
}
