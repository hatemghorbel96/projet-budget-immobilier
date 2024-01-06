<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bientype;
use App\Models\Location;
use App\Models\Propertie;
use Illuminate\Http\Request;



use App\Models\ImagePropertie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PropertieController extends Controller
{
    public function index() {

        $properties = Propertie::with('images')->paginate(5);

       
        return view('backend.admin.properties.index',compact('properties'));
    }

    public function indexAjax(Request $request) {

        $searchTerm = $request->input('search');

        $properties = Propertie::with('images')->paginate(5);

        if ($searchTerm) {

            $properties = Propertie::with('images')->where('title', 'like', "%$searchTerm%")->paginate(5);
        } else {

            $properties = Propertie::with('images')->paginate(5);
        }

        if ($request->ajax()) {
            return view('backend.admin.properties.ajax.ajax-index',compact('properties'))->render();
           
        }

    }

    public function create()
    {
        $locations = Location::all();
        $bientypes = Bientype::all();

        return view('backend.admin.properties.create', compact('locations', 'bientypes'));
    }

    public function store(Request $request)
    {
       /*  dd($request->all()); */
       $user_id = auth()->id(); 
        
       
       $data = $request->except('images');
       $data['user_id'] = $user_id;
       $data['views'] = 0;
       $property = Propertie::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

            $make_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 800)->save('upload/multi-image/' . $make_name);
            $uploadPath = 'upload/multi-image/' .$make_name;

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
       return redirect()->route('properties.index')->with('success', 'Property created successfully.');
       
    }

    public function deleteProperty(Request $request)
    {
        $propertyId = $request->input('property_id');

        $property = Propertie::findOrFail($propertyId);
        
        $property->delete();

        return response()->json(['success' => true, 'message' => 'Property deleted successfully']);
    }

    public function edit($id)
    {
        $property = Propertie::with('images')->findOrFail($id);
        $locations = Location::all();
        $bientypes = Bientype::all();
      
        return view('backend.admin.properties.edit', compact('property', 'locations', 'bientypes'));
    }


    public function update(Request $request, $id)
    {
        $property = Propertie::findOrFail($id);
       /*  $user_id = auth()->id();  */

    
        if ($request->has('delete_images')) {
            $deletedImageIds = $request->input('delete_images');
            ImagePropertie::whereIn('id', $deletedImageIds)->delete();
        }

    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $newImage) {
                $makeName = hexdec(uniqid()) . '.' . $newImage->getClientOriginalExtension();
                Image::make($newImage)->resize(800, 800)->save('upload/multi-image/' . $makeName);
                $uploadPath = 'upload/multi-image/' . $makeName;

                ImagePropertie::create([
                    'propertie_id' => $property->id,
                    'path' => $uploadPath,
                    'created_at' => now(),
                ]);
            }
        }

       
        $property->update([
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'budget' => $request->input('budget'),
            'description' => $request->input('description'),
            'parking' => $request->input('parking'),
            'bathroom' => $request->input('bathroom'),
            'rooms' => $request->input('rooms'),
            'surface' => $request->input('surface'),
            'codepostal' => $request->input('codepostal'),
            'address' => $request->input('address'),
            'location_id' => $request->input('location_id'),
            'bientype_id' => $request->input('bientype_id'),
            'for' => $request->input('for'),
            'title' => $request->input('title'),
        ]);

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

}
