<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendite;


class VenditeController extends Controller
{
    public function index()
    {
        $vendite = Vendite::all();
        return view('admin.vendite.index', compact('vendite'));
    }

    public function create()
    {
        return view('admin.vendite.create');
    }

    public function store(Request $request)
    {
        Vendite::create($request->all());
        return redirect()->route('admin.vendite.index');
    }

    public function show($id)
    {
        $vendita = Vendite::findOrFail($id);
        return view('admin.vendite.show', compact('vendita'));
    }

    public function edit($id)
    {
        $vendita = Vendite::findOrFail($id);
        return view('admin.vendite.edit', compact('vendita'));
    }

    public function update(Request $request, $id)
    {
        $vendita = Vendite::findOrFail($id);
        $vendita->update($request->all());
        return redirect()->route('admin.vendite.index');
    }

    public function destroy($id)
    {
        $vendita = Vendite::findOrFail($id);
        $vendita->delete();
        return redirect()->route('admin.vendite.index');
    }
}
