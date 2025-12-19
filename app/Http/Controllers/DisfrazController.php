<?php

namespace App\Http\Controllers;

use App\Models\Disfraz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisfrazController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disfraces = Disfraz::getDisfraces();
        return view('Disfraces.indexD', compact('disfraces'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Disfraces.createD');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'talla' => 'required',
        ]);
        Disfraz::createDisfraz($request->all());
        return redirect()->route('Disfraces.indexD')
        ->with('success', 'Disfraces registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disfraz $disfraces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disfraz $disfraz)
    {
        return view('Disfraces.editD', compact('disfraz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disfraz $disfraces)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'talla' => 'required',
        ]);
        $disfraces->updateDisfraz($request->all(), $disfraces->id);
        return redirect()->route('Disfraces.index')
            ->with('success', 'Disfraces actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disfraz $disfraz)
    {
        Disfraz::deleteDisfraz($disfraz);
        return redirect()->route('Disfraces.index')
            ->with('success', 'Disfraces eliminado.');

    }
}
