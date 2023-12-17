<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bientype;
use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Http\Request;



use App\Models\ImagePropertie;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PropertieController extends Controller
{

    public function create()
    {
        $locations = Location::all();
        $bientypes = Bientype::all();

        return view('backend.admin.properties.create', compact('locations', 'bientypes'));
    }

    public function store(Request $request)
    {
   
        $property = Propertie::create($request->except('images'));

    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $makeName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                
                
                $resizedImage = Image::make($image)->resize(800, 800)->encode();

            
                $uploadPath = 'upload/multi-image/' . $makeName;
                Storage::put($uploadPath, $resizedImage, 'public');

                
                ImagePropertie::create([
                    'propertie_id' => $property->id, 
                    'path' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }

        return redirect()->route('properties.index')->with('success', 'Property created successfully.');
    }
}
