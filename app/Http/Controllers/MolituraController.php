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
        Molitura::create($request->all());
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
        $molitura = Molitura::findOrFail($id);
        $molitura->update($request->all());
        return redirect()->route('admin.molitura.index');
    }

    public function destroy($id)
    {
        $molitura = Molitura::findOrFail($id);
        $molitura->delete();
        return redirect()->route('admin.molitura.index');
    }
}
