<?php

namespace App\Http\Controllers;

use App\Models\Bientype;
use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
      
        $properties = Propertie::with('images')->get();
        $locations = Location::whereHas('properties')->get();
        $bientypes = Bientype::whereHas('properties')->get();
        $maxBudget = $properties->max('budget');

        return view('welcome',compact('properties','locations','bientypes','maxBudget'));
    }
}
