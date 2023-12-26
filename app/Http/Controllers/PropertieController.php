<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bientype;
use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Http\Request;



use App\Models\ImagePropertie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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

            $make_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 800)->save('upload/multi-image/' . $make_name);
            $uploadPath = 'upload/multi-image/' . $make_name;

            ImagePropertie::insert([

                    'propertie_id' => $property->id,
                    'path' => $uploadPath,
                    'created_at' => now(),


            ]);
                /* $makeName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    
              
                $resizedImage = Image::make($image)->resize(800, 400);
    
              
                $uploadPath = $image->storeAs('upload/multi-image', $makeName, 'public');
    
                
                Storage::put($uploadPath, $resizedImage, 'public');
    
                ImagePropertie::create([
                    'propertie_id' => $property->id,
                    'path' => $uploadPath,
                    'created_at' => now(),
                ]); */
            }
        }

       /*  return redirect()->route('properties.index')->with('success', 'Property created successfully.'); */
       return redirect()->back()->with('success', 'Property created successfully.');
    }

   
}
