<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function infoperso(){

        return view('backend.admin.user.dashboard');
    }


    public function updateProfile(Request $request)
    {
        
        $userid = Auth::user()->id;
        $user = Auth::user();
    
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        
        ]);

   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 800)->save('upload/user/' . $name_gen);
            $save_url = 'upload/user/' . $name_gen;
    
           
            if ($user->image) {
                Storage::delete($user->image);
            }
    
            User::where('id',$userid)->update([               
                'image' => $save_url,
            ]);
          
        }

        User::where('id',$userid)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'address' => $validatedData['address'],
        ]);

        return redirect()->back()->with('success', 'Profile information updated successfully.');
    }
}
