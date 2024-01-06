<?php

namespace App\Http\Controllers\backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('backend.admin.contact.index', compact('contacts'));
    }


    public function contact()
    {

        return view('front.contact.contact');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'    => 'required|string|max:255',
            'telephone'   => 'required|int',
            'message' => 'required|string',
        ]);


        Contact::create($request->all());


        return redirect()->route('contact.send')->with('success', 'Votre message a été envoyé avec succès!');
    }


    public function show($id)
    {
        $c = Contact::findOrFail($id);

        if ($c->readed == null) {
            $c->readed = 1;
            $c->save();
        }
       

        return view('backend.admin.contact.view', compact('c'));
    }


    public function delete($id)
    {
        $c = Contact::findOrFail($id);

        $c->delete();
       

        return redirect()->route('contact.index')->with('success', 'Contact supprimé avec succès!');
    }
}
