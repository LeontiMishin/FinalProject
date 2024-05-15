<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        return view('profile', ['profile' => $profile]);
    }

    public function update(Request $request)
{
    $profile = Profile::find(1);
    if (!$profile) {
        return redirect()->back()->withErrors('Profile not found.');
    }

    $profile->full_name = $request->input('full_name');
    $profile->email = $request->input('email');
    $profile->phone = $request->input('phone');
    $profile->address = $request->input('address');
    $profile->twitter = $request->input('twitter');
    $profile->instagram = $request->input('instagram');
    $profile->facebook = $request->input('facebook');
    $profile->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}


}
