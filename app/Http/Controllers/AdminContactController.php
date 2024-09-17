<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        // Recupera tutti i contatti dal database
        $contacts = Contact::all();

        // Restituisce la vista per visualizzare i contatti
        return view('admin.contacts.index', compact('contacts'));
    }
}
