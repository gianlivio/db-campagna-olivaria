<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Molitura; //

class MolituraController extends Controller
{
    public function index()
    {
        $molitura = Molitura::all();
        return view('admin.molitura.index', compact('molitura'));
    }

    public function create()
    {
        return view('admin.molitura.create');
    }

    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([
            'data' => 'required|date',
            'frantoio' => 'required|string|max:255',
            'terreno' => 'required|string|max:255',
            'kg_olive' => 'required|numeric|min:0',
            'varieta' => 'required|string|max:255',
            'litri_olio' => 'required|numeric|min:0',
            'resa' => 'required|numeric|min:0|max:100',
        ]);

        Molitura::create($validated);

        return redirect()->route('admin.molitura.index');
    }

    public function show($id)
    {
        $molitura = Molitura::findOrFail($id);
        return view('admin.molitura.show', compact('molitura'));
    }

    public function edit($id)
    {
        $molitura = Molitura::findOrFail($id);
        return view('admin.molitura.edit', compact('molitura'));
    }

    public function update(Request $request, $id)
    {
        // validation
        $validated = $request->validate([
            'data' => 'required|date',
            'frantoio' => 'required|string|max:255',
            'terreno' => 'required|string|max:255',
            'kg_olive' => 'required|numeric|min:0',
            'varieta' => 'required|string|max:255',
            'litri_olio' => 'required|numeric|min:0',
            'resa' => 'required|numeric|min:0|max:100',
        ]);

        $molitura = Molitura::findOrFail($id);
        $molitura->update($validated);

        return redirect()->route('admin.molitura.index');
    }

    public function destroy($id)
    {
        $molitura = Molitura::findOrFail($id);
        $molitura->delete();

        return redirect()->route('admin.molitura.index');
    }
}
