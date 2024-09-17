<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Valida i dati del form
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Salva i dati nel database
        Contact::create($validated);

        return response()->json(['message' => 'Messaggio inviato con successo!'], 200);
    }
}
