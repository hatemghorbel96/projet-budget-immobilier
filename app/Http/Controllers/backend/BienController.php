<?php

namespace App\Http\Controllers\backend;

use App\Models\Propertie;
use App\Http\Controllers\Controller;

class BienController extends Controller
{
    public function index($type = null) {

        $properties = $type ? Propertie::with('images')->where('for', $type)->get() : Propertie::all();

        return view('front.bien.listbien', compact('properties'));
    }


    public function show($id){
        $p = Propertie::with('images')->findOrFail($id);  
       /*  dd($p); */
        $otherProperties = Propertie::with('images')->where('id', '!=', $id)->get();

        return view('front.bien.view', compact('p', 'otherProperties'));
    }
}
