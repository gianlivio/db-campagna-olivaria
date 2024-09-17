<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeseLungoTermine;

class SpeseLungoTermineController extends Controller
{
   
        // Metodo API che restituisce i dati in formato JSON
    public function apiIndex()
    {
        $speseLungoTermine = SpeseLungoTermine::select('descrizione')->get();
        return response()->json($speseLungoTermine);
    }
    
    public function index()
    {
        $speseLungoTermine = SpeseLungoTermine::all();
        return view('admin.spese_lungo_termine.index', compact('speseLungoTermine'));
    }

    public function create()
    {
        return view('admin.spese_lungo_termine.create');
    }

    public function store(Request $request)
    {
        SpeseLungoTermine::create($request->all());
        return redirect()->route('admin.spese_lungo_termine.index');
    }

    public function show($id)
    {
        $spesa = SpeseLungoTermine::findOrFail($id);
        return view('admin.spese_lungo_termine.show', compact('spesa'));
    }

    public function edit($id)
    {
        $spesa = SpeseLungoTermine::findOrFail($id);
        return view('admin.spese_lungo_termine.edit', compact('spesa'));
    }

    public function update(Request $request, $id)
    {
        $spesa = SpeseLungoTermine::findOrFail($id);
        $spesa->update($request->all());
        return redirect()->route('admin.spese_lungo_termine.index');
    }

    public function destroy($id)
    {
        $spesa = SpeseLungoTermine::findOrFail($id);
        $spesa->delete();
        return redirect()->route('admin.spese_lungo_termine.index');
    }
}
