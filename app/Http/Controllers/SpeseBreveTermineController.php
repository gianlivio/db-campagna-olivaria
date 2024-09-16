<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeseBreveTermine;

class SpeseBreveTermineController extends Controller
{
    public function index()
    {
        $speseBreveTermine = SpeseBreveTermine::all();
        return view('admin.spese_breve_termine.index', compact('speseBreveTermine'));
    }

    public function create()
    {
        return view('admin.spese_breve_termine.create');
    }

    public function store(Request $request)
    {
        SpeseBreveTermine::create($request->all());
        return redirect()->route('admin.spese_breve_termine.index');
    }

    public function show($id)
    {
        $spesa = SpeseBreveTermine::findOrFail($id);
        return view('admin.spese_breve_termine.show', compact('spesa'));
    }

    public function edit($id)
    {
        $spesa = SpeseBreveTermine::findOrFail($id);
        return view('admin.spese_breve_termine.edit', compact('spesa'));
    }

    public function update(Request $request, $id)
    {
        $spesa = SpeseBreveTermine::findOrFail($id);
        $spesa->update($request->all());
        return redirect()->route('admin.spese_breve_termine.index');
    }

    public function destroy($id)
    {
        $spesa = SpeseBreveTermine::findOrFail($id);
        $spesa->delete();
        return redirect()->route('admin.spese_breve_termine.index');
    }
}
