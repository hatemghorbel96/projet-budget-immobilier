<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        $locations = Location::all();
        $properties = Propertie::with('images')->get();
        return view('welcome',compact('properties','locations'));
    }
}
