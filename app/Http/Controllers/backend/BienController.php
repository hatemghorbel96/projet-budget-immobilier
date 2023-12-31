<?php

namespace App\Http\Controllers\backend;

use App\Models\Bientype;
use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class BienController extends Controller
{
    public function index($type = null) {

        $properties = $type ? Propertie::with('images')->with('location')->with('bientype')->where('for', $type)->paginate(2) : Propertie::with('images')->with('location')->with('bientype')->paginate(2);
        $locations = Location::whereHas('properties')->get();
        $bientypes = Bientype::whereHas('properties')->get();
        $maxBudget = $properties->max('budget');
        return view('front.bien.listbien', compact('properties','type','locations','bientypes','maxBudget'));
    }

    public function getwithajax(Request $request)
    {
        $locations = Location::whereHas('properties')->get();
        $bientypes = Bientype::whereHas('properties')->get();

       /*  dd($request->all()); */
        $type = $request->input('type');
    
        $locationId = $request->input('location');
        $propertyType = $request->input('property_type');
        $minBudget = $request->input('min_budget');
        $getmaxBudget = $request->input('max_budget');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');
        
        
       /*  dd([
            'type' => $type,
            'locationId' => $locationId,
            'propertyType' => $propertyType,
            'minBudget' => $minBudget,
            'maxBudget' => $getmaxBudget,
            'bedrooms' => $bedrooms,
            'bathrooms' => $bathrooms,
        ]); */
        $query = Propertie::with('images')->with('location')->with('bientype')->where('for', $type);
        if ($locationId) {
            $query->where('for', $type)
            ->where('location_id', $locationId)->paginate(2);    
            $maxBudget = $query->max('budget');
            $properties = $query->paginate(2);
        }
    
        
        if ($propertyType) {
            $query->where('for', $type)
                ->whereIn('bientype_id', $propertyType)->paginate(2);
                $maxBudget = $query->max('budget');
                $properties = $query->paginate(2);
        }
       
      
        if ($minBudget!=null && $getmaxBudget!=null) {
           
            $query->where('for', $type)
            ->whereBetween('budget', [(float)$minBudget, (float)$getmaxBudget])->paginate(2);           
            $maxBudget = $query->max('budget');
            $properties = $query->paginate(2);
        }

      
        if ($bedrooms) {
            $query->where('for', $type)->paginate(2);
            $maxBudget = $query->max('budget');
            $properties = $query->paginate(2);
        }

        
        if ($bathrooms) {
            
           $query->where('bathroom', $bathrooms)->where('for', $type)->paginate(2);
            $maxBudget = $query->max('budget');
            $properties = $query->paginate(2);
        }

        if ($bathrooms==null && $bedrooms==null && $minBudget==null  && $propertyType==null  && $locationId==null ){
          
            $properties =  Propertie::with('images')->with('location')->with('bientype')->where('for', $type)->paginate(2);
            $maxBudget = $properties->max('budget');
        }

        /* if ($request->input('page')) {
            $properties =  Propertie::with('images')->with('location')->with('bientype')->where('for', $type)->paginate(2);
        } */
     
        

        if ($request->ajax()) {
           
           
            return view('front.bien.ajax.listbien', compact('properties'))->render();
        }

    }


    public function show($id){
        $p = Propertie::with('images')->findOrFail($id);  
       /*  dd($p); */
      
        $p->increment('views');
       
        $otherProperties = Propertie::with('images')->where('id', '!=', $id)->get();

        return view('front.bien.view', compact('p', 'otherProperties'));
    }
}
