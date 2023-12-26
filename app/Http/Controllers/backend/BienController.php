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
}
